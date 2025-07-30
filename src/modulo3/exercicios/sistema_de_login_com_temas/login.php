<?php
session_start();
if(!empty($_SESSION['login'])){
    header('Location: welcome.php');
    exit;
}

if(!empty($_POST['login']) && !empty($_POST['password'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if($login == 'admin' && $password == 'admin'){
        $msg = 'Você está logado';
        $_SESSION['login'] = $login;
        $tema = $_POST['tema'];

        if(!empty($tema)){
            setcookie('tema', $tema);
        }

        header('Location: welcome.php');
        exit;
    } else {
        $msg = 'Usuário ou senha inválidos!';
    }
} else {
    $msg = 'Preencha todos os dados corretamente';
}
