<?php
if(!empty($_POST['login']) && !empty($_POST['password'])){ // Verifica se os dados do formulario não estão vazios
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if ($login == 'ADMIN' && $password == 'SENHA'){
        $msg = 'Usuário logado com sucesso';
    } else {
        $msg = 'Sem sucesso';
    }

} else { // Se estiverem, o valor padrão quando o form for enviado é 
    $msg = 'Preencha todos os campos!';
}

// VERIFICA SE ALGUMA REQUISIÇÃO DO MÉTODO POST FOI ENVIADA PELO FORMULÁRIO
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo 'Foi enviado um formulário';
// } else {
//     echo 'Ainda não foi enviado nada';
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturando Dados de Formulario</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Nome de usuário" value="<?=$login ?? '' ?>"/><br> <!--O nullish operator funciona assim: se a variável a esquerda tiver um valor ele manterá o valor, se ela não tiver um valor ele usa o valor da variáve a direita-->
        <input type="password" name="password" placeholder="Senha" value=<?=$password ?? '' ?>/><br>
        <input type="submit" value="Enviar"/>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo $msg;
        } // Só exibe a mensagem SE algum formulário POST for enviado. Isso evita com que ocorra erro de declaração de variável
        ?>
    </form>
</body>
</html>