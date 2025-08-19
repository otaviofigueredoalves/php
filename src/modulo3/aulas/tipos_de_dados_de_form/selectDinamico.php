<?php 
require 'functions.php';
$erro = null;
$sucesso = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(!empty($_POST['tecnologia'])){
        $select = $_POST['tecnologia'];
        echo $select;
    }

    $tecnologias = [
        'HTML',
        'CSS',
        'JAVASCRIPT',
        'PHP',
    ];

    
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
            <!-- Geralmente, as options de um select são definidas pelo php/banco de dados, então, esta forma abaixo não mostra um caso real. Nós poderiamos nesse caso, em vez de inserir manualmente, definir no php os items que queremos na nossa option e criar um forEach para percorrer cada item, deixando o select dinâmico -->

            <!-- <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="javascript">JAVASCRIPT</option>
            <option value="php">PHP</option> -->

            <!-- Exemplo correto: -->
            <?php foreach($tecnologias as $tec): ?>{ 
                <!-- Percorra por cada item do array tecnologias  -->
                <option value="<?=$tec?>"><?=$tec?></option>
            }
            <?php endforeach ?>

        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>