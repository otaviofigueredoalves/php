<?php
// é possível passar múltiplos dados através do &
echo '<pre>';
echo var_dump($_GET);
echo '</pre>';
echo '<br>';

$pessoa = $_GET['pessoa']; // pega o valor de pessoa
// cada requisição pode passar dados únicos

$idade = $_GET['idade'];
$cidade = $_GET['cidade'];

echo "Olá, $pessoa com $idade anos que mora em $cidade";



