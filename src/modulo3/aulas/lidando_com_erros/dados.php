<?php
if (!empty($_POST['login']) && !empty($_POST['password'])){
     $login = htmlspecialchars($_POST['login']);
     $password =  htmlspecialchars($_POST['password']);

    if($login == 'admin' && $password == 'admin'){
       $mensagem = 'Logado com sucesso';
    } else {
       $mensagem = 'Senha ou Usuário incorretos';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturando Dados de Formulario</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Nome de usuário"/><br>
        <input type="password" name="password" placeholder="Senha"/><br>
        <a href="https://youtube.com" id="link">XSS</a>
        <input type="submit" value="Enviar"/>
        <?php 
        if (!empty($mensagem)){
            echo $mensagem;
        }
        ?>
    </form>
</body>
</html>