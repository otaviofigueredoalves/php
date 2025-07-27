<?php
$user = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

// if($user && $password){
//     echo "Este é o usuário: $user e esta é a senha: $password";
// } else {
//     echo "Usuário inválido!";
// }

if(!empty($user) && !empty($password)){
    echo "Usuário: $user | Senha: $password";
} else {
    echo "Inválido!";
}

// Agora com o método POST, os dados são enviados através do corpo da requisição HTTP. Ou seja, não ficam expostos na URL, tornando a captura mais segura.

// $_GET -> Dados ficam expostos e são facilmente manipuláveis

// $_POST -> Dados são passados pelo corpo da requisição http
// Não há limite de tamanho
// Os dados não são tão facilmente modificados pelo usuário
