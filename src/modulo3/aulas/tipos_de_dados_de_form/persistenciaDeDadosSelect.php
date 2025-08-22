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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['tecs'])){
        $erro = 'Selecione alguma tecnologia';
    } else {
        $tecnologiaSelecionada = $_POST['tecs'];
        if(count($tecnologiaSelecionada)!= 1){
            $erro = 'Selecione apenas UMA tecnologia';
        } elseif($tecnologiaSelecionada[0] != 'html'){
            $erro = 'Selecione apenas o HTML';
        } else {
            $sucesso = 'HTML SELECIONADO!';
        }
    }
}

var_dump($tecnologiaSelecionada);
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

        <select name="tecs[]" id="tecs">
            <?php foreach ($tecnologias as $tec => $tecValue): ?>
                <option value="<?= $tecValue ?>"
                    <?=in_array($tecValue, $tecnologiaSelecionada) ? 'selected' : null ?>
                ><?=$tec?></option>
                
                

            <?php endforeach ?>
        </select>

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