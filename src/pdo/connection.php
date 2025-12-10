<?php
require_once 'env.php';
$dsn = "mysql:host=$ENV_HOST; dbname=$ENV_DBNAME";

try {
    $pdo = new PDO($dsn, $ENV_USER, $ENV_PASS);
    echo 'Conexão bem sucedida';
    echo '<br>';
    echo '<hr>';
} catch (PDOException $e){
    echo 'Erro de conexão: '. $e->getMessage();
}