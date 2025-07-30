<?php
session_start();

if(empty($_SESSION['login'])){
   header('Location: index.php');
   exit; 
} 

if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];

    if($tema == 'black'){
        $cor = '#000';
    } else {
        $cor = '#f0f0f0';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Login</title>
</head>
<body style="background-color:<?= $cor ?? ''?>">
    <section class="container-box">
        <div class="container-content">
            <form action="logout.php" method="POST" class="content">
                <div class="title">
                    <h1>VOCê ESTÁ LOGADO</h1>
                </div>
                <input type="submit" value="Logout" class="btn" name="logout">
            </form>
        </div>
    </section>
</body>
</html>

<!-- OBS, se está página não iniciar com session_start(), não tem como ler a sessão do usuário e por segurança, causa erro, te redirecionando de volta para a página de login. Toda a página que precisa verificar sessão, é necessário começar som session_start() -->