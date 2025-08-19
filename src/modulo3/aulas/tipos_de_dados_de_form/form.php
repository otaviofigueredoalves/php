<?php 
require 'functions.php';
$erro = null;
$sucesso = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $texto = $_POST['texto'];

    // sanitização da string
    $texto = htmlspecialchars($texto);
    $texto = trim($texto); // remover espaços no começo e depois da palavra
    $texto = filter_var($texto, FILTER_SANITIZE_EMAIL); // deixa apenas os caracteres permitidos para email

    // SANITIZE X VALIDATE
    // Sanitize faz uma limpeza na string. Por exemplo, FILTER_SANITIZE_EMAIL faz uma limpeza na string de caracteres que não são possíveis para o email
    // Já o FILTER_VALIDATE_EMAIL, faz a validação do email, verifica se tem algum caractere que invalide o email.

    // Primeira validação
    if(empty($texto)){ // se não tiver nenhum texto
        $erro = 'A entrada não pode ser vazia';
    } elseif (strlen($texto) < 8){ // se o texto for menor que 8 chars
        $erro = 'O texto deve ter no mínimo 8 caracteres';
    } else if (strlen($texto) > 20){ // se o texto for maior que 10 chars
        $erro = 'O texto deve ser menor que 20 caracteres';
    // } else if(strpos($texto, '@') == false){ // se tem @ no texto
    } else if (filter_var($texto, FILTER_VALIDATE_EMAIL) == false){
        $erro = 'E-mail inválido';
    } else {
        $sucesso = 'Formulário validado com sucesso';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>
    <form action="" method="POST">
        <input type="text" name="texto" placeholder="Digite seu email">
        <input type="submit" value="Enviar">
        <?php if (!empty($erro)): ?>
        <p style="color: red">
            <?=$erro?>
        </p>
        <?php endif ?>
        <?php if(!empty($sucesso)): ?>
        <p style="color: green">
            <?=$sucesso?>
        </p>
        <?php endif ?>
    </form>
</body>
</html>