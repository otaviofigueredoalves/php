<?php
if(session_status() === PHP_SESSION_NONE){ session_start();}

$user_email = $_POST['user_email'] ?? null;
$user_password = $_POST['user_password'] ?? null;
$user_name = $_POST['user_name'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($user_email && !empty($user_password))){
        $login = htmlspecialchars($_POST['user_email']);
        $password = htmlspecialchars(($_POST['user_password']));
        $_SESSION['user_name'] = $user_name; 
        $_SESSION['user_email'] = $login;
        $_SESSION['user_password'] = $password;
        // var_dump($login);
        // var_dump($password);
        
    } else {
        $erro = 'Preencha todos os campos';
    }

    if(!empty($_POST['user_email_login']) && !empty($_POST['user_password_login'])){
        $user_login = $_POST['user_email_login'];
        $user_pass = $_POST['user_password_login'];

        if($_SESSION['user_email'] != $user_login || $_SESSION['user_password'] != $user_pass){
            $erro = 'Usuário ou senha inválidos';
        } else {
            header('Location: ./pages/welcome.php');
            exit();;
            
        }
    }
    
}