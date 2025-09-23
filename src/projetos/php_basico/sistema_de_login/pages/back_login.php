<?php
if(session_status() === PHP_SESSION_NONE){ session_start();}

$user_email = $_POST['user_email'] ?? null;
$email_verify = filter_input(INPUT_POST, 'user_email', FILTER_VALIDATE_EMAIL);
$user_password = $_POST['user_password'] ?? null;
$user_login = $_POST['user_email_login'] ?? null;
$user_pass = $_POST['user_password_login'] ?? null;
$path_logins = __DIR__ . '/../logins/';