<?php
$erro = null;
$sucesso = null;

$tecnologias = [
    'HTML' => 'html',
    'CSS' => 'css',
    'Javascript' => 'js',
    'PHP' => 'php',
];

$tecnologias_validas = [
    'PHP' => 'php',
    'Javascript' => 'js',
];
var_dump($tecnologias_validas);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['tecs'])) {
        $tecs = $_POST['tecs'] ?? [];
        var_dump($tecs);

        foreach($tecs as $tec){
            if(!in_array($tec, $tecnologias_validas)){ // OBS, a função in_array analisa apenas os valores, ignorando completamente a chave do array associativo. Caso quisesse comparar as chaves, poderia usar o array_key_exists
                $tecnologias_invalidas[] = $tec;
                $erro = 'Selecione tecnologias válidas. Tecnologias inválidas: '.implode(", ",$tecnologias_invalidas);
            }
        }

        if(count($tecs) != 2){
            $erro = 'Selecione EXATAMENTE duas opções';
        }

        if(empty($erro)){
            $sucesso = 'Tudo numa boa';
        }

    } else {
        $erro = 'Você precisa selecionar alguma tecnologia';
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

        <?php foreach ($tecnologias as $tec => $tecValue): ?>
            <div>
                <label for="tecs"><?= $tec ?></label>
                <input type="checkbox" name="tecs[]" id="tecs" value="<?= $tecValue ?>">
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