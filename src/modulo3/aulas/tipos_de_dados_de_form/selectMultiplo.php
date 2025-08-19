<?php
require 'functions.php';
$erro = null;
$sucesso = null;

$tecnologias = [
    'HTML',
    'CSS',
    'JAVASCRIPT',
    'PHP',
];
$tecnologias_validas = [

    'JAVASCRIPT',
    'PHP',
];
$tecnologias_invalidas = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $opcoes = $_POST['opcoes'];

    foreach($opcoes as $opcao){
        if (!in_array($opcao, $tecnologias_validas)){
            $tecnologias_invalidas[] = $opcao;
        }
    }
    var_dump($tecnologias_invalidas);
    if(!empty($tecnologias_invalidas)){
        $erro = "As tecnologias ".implode(", ", $tecnologias_invalidas)." são invalidas";
    }

    if(count($opcoes) != 2){
        $erro = 'Selecione EXATAMENTE duas opções';
    }
    
    if (empty($erro)){
        $sucesso = 'Tudo numa boa';
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
        <select name="opcoes[]" multiple id="select"> <!-- Quando trabalhos com select multiplo, estamos trabalhando com um array -->
           
           
            <?php foreach ($tecnologias as $tec): ?>{
    
            <option value="<?= $tec ?>"><?= $tec ?></option>
            }
        <?php endforeach ?>

        </select>
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