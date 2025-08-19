<?php 
require 'functions.php';

$tecnologias_banco = [
    [
        'codigo' => 'html',
        'nome' => 'HTML'
    ],
    [
        'codigo' => 'js',
        'nome' => 'JAVASCRIPT'
    ],
    [
        'codigo' => 'rn',
        'nome' => 'React Native'
    ],
    [
        'codigo' => 'php',
        'nome' => 'PHP',
    ],
];

$tecnologias_api = [
    'HTML' => 'html',
    'JAVASCRIPT' => 'js',
    'React Native' => 'rn',
    'PHP' => 'php',
    'BOOTSTRAP' => 'bts',
]





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
        <select name="tecnologia" id="select">
            <!-- Em um cenário real, iremos percorrer arrays associativos, ou seja, chave e valor. As duas principais estruturas são através de bancos e APIS. Percorrendo um array de arrays ou percorrendo um array de chave e valor simples -->

            <!-- Exemplo, consumindo através de um BANCO: -->
            
            <!-- <?php foreach($tecnologias_banco as $tec): ?>{ 
                <option value="<?=$tec['codigo']?>"><?=$tec['nome']?></option>
            }
            <?php endforeach ?> -->

            <!-- Exemplo, consumindo através de uma API: -->
            <?php foreach($tecnologias_api as $nome => $codigo): ?>
                <option value="<?=$codigo?>"><?=$nome?></option>
            <?php endforeach ?>

        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>