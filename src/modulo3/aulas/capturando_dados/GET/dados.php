<?php
$user = $_GET['login'] ?? null;
$password = $_GET['password'] ?? null;

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

// Para validar dados que vêm de fontes externas, use sempre !empty()


// Chegamos até aqui, mas temos um problema

// Maravilha, deixamos a captura de dados mais automatizada, sem precisar inserir diretamente os dados na URL. No entanto, fora do contexto didático, não é recomendado utilizar $_GET para capturar dados do usuário, pois estes ficam expostos na URL e também com grande quantidade de caracteres.