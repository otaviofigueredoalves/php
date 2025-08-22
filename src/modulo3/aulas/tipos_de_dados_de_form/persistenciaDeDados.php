<?php

$erro = null;
$sucesso = null;

$tecnologias = [
    'HTML' => 'html',
    'CSS' => 'css',
    'Javascript' => 'js',
    'PHP' => 'php',
];
$tecnologiaSelecionada = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['tecs'])){
        $erro = 'Selecione alguma tecnologia';
    } else {
        $tecnologiaSelecionada = $_POST['tecs'];

        if(count($tecnologiaSelecionada) != 1){
            $erro = 'Selecione apenas UMA tecnologia';
        } else if($tecnologiaSelecionada[0] != 'html'){
            $erro = 'Selecione APENAS o HTML';
        } else {
            $sucesso = 'HTML SELECIONADO!';
        }
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
    <h1>SELECIONE O HTML</h1>
    <form action="" method="POST">

        <?php foreach ($tecnologias as $tec => $tecValue): ?>
            <div>
                <label for="tecs"><?= $tec ?></label>
                <input type="checkbox" name="tecs[]" id="tecs" value="<?= $tecValue ?>"
                <?php 
                    if(in_array($tecValue, $tecnologiaSelecionada)){
                        echo 'checked';
                    }
                ?>
                >
            </div>
            <hr>
        <?php endforeach ?>

        <input type="submit" value="Enviar">
        <?php if (!empty($erro)): ?>
            <p style="color: red">
                <?= $erro ?>
            </p>
        <?php endif ?>
        <?php if (!empty($sucesso)): ?>
            <p style="color: green">
                <?= $sucesso ?>
            </p>
        <?php endif ?>

    </form>
</body>

</html>