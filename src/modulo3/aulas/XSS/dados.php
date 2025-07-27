<?php
$user = htmlspecialchars($_POST['login'] ?? null);
$password = htmlspecialchars($_POST['password'] ?? null);

if(!empty($user) && !empty($password)){
    echo "Usuário: $user | Senha: $password";
} else {
    echo "Inválido!";
}
// XSS - Cross Site Scripting é um ataque hacker que permite com que o hacker insira script malicioso através de entrada de dados desprotegidas.

// htmlspecialchars - irá pegar caracteres específicos do HTML e irá substituir por caracteres que são visualmente iguais, porém, que não permita a execução do script
