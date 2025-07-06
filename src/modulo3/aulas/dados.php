<?php
// Query String, passar dados na URL que vão ser recebidas pelo PHP
// É preciso ter a URL php e incluir uma ?, que indica os dados que estão sendo passados via Query String;
// Os dados são simples, chave-valor.
// Ex: localhost/8000/dados.php?nome=Otavio

// Superglobais no PHP
// Variaveis que estão definidas pra gente no escopo global.
// Escopo global: está fora de tudo, funciona em qualquer lugar
// $_GET -> Usada para pegar os dados passados via GET / QUERIE STRING
echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '<br>';

$nome = $_GET['nome']; // pega o valor de nome
// cada requisição pode passar dados únicos

echo "Olá, $nome";