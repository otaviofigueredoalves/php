<?php
session_start();
$csrf = random_int(1111, 9999);
var_dump($csrf);
$_SESSION['token_csrf'] = $csrf;
// var_dump($_SESSION['token_csrf'])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="transferir.php" method="GET">
        <label for="conta_destino">Conta destino: </label>
        <input type="text" name="conta_destino" id="conta_destino" value="1">

        <label for="valor">Valor: </label>
        <input type="number" name="valor" id="valor
        " value="1000">

        <!-- PROTEÇÃO CSRF -->
        <input type="hidden" name="token_csrf" value="<?=$csrf?>" id="token_csrf">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>