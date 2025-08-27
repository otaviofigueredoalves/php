<?php
session_start();
$csrf = $_SESSION['token_csrf'];
var_dump($csrf);

if ($_GET['token_csrf'] != $csrf){
    die("TOKEN INVÁLDIDO!");
}

if(empty($_SESSION['user'])){ // só essa condição de estar logado não basta. Pois, os header de autenticação vão junto a requisição, possibilitando o ataque CSRF por outra página maliciosa que faça a mesma requisição
    die('Usuário não autenticado');
} else {
    
    // Se tiver a sessão ativa, faz a transferência
    $conta_destino = $_GET['conta_destino'];
    $valor = $_GET['valor'];
    $_SESSION['saldo'] -= $valor;

    echo 'Olá '. $_SESSION['user']."<br>". 'Transferência de R$ '. $valor. ' para a conta '. $conta_destino;

    echo '<br> Seu novo saldo é: '. $_SESSION['saldo']; 

}

