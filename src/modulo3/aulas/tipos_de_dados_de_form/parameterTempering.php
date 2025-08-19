<?php
require 'functions.php';
$erro = null;
$sucesso = null;

// PARAMETER TEMPERING É UM PROBLEMA DE DADOS NÃO ESPERADOS ENVIADOS PARA O SERVIDOR VIA SELECT. Este problema consiste em alterar o HTML do select para que senha adicionado uma opção não disponivel originalmente pela aplicação. 

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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['tecnologia'])) {
        $select = $_POST['tecnologia'];
        
    }

    if(!in_array($select, $tecnologias_validas)){
        $erro = 'Opção inválida';
    } else {
        $erro = 'Opção válida'; 
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
        <select name="tecnologia" id="select">
            <?php foreach ($tecnologias as $tec): ?>{
            
            <option value="<?= $tec ?>"><?= $tec ?></option>
            }
        <?php endforeach ?>

        </select>
        <input type="submit" value="Enviar">

        <?php
            if(!empty(verificarStatus($erro))){
                echo $erro;
            } else {
                echo $sucesso;
            }
        ?>
    </form>
</body>

</html>