<?php
require_once 'env.php'; // pega as variaveis de ambiente. Aqui é só pra simular, na verdade seria um .env
/**
 * String de conexão que é fornecida ao PDO para dizer onde o banco de dados está e qual driver usar
 * host= Endereço do servidor (IP ou localhost)
 * dbname= nome do banco de dados
 * charset(opcional)= conjunto de caracteres (geralmente utf8mb4)
 * 
 * se o mysql não tiver com a porta padrão, especifique: $dsn = "mysql:host=$ENV_HOST;port=3307;dbname=$ENV_DBNAME
 */
$dsn = "mysql:host=$ENV_HOST; dbname=$ENV_DBNAME;charset=utf8mb4"; 

try {
    $pdo = new PDO($dsn, $ENV_USER, $ENV_PASS); // DSN é o caminho pro banco, ENV_USER o usuário e ENV_PASS a senha pra acessar o banco. Essa é a combinação pra formar o PDO, o PDO serve pra traduzir o PHP para o MYSQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexão bem sucedida';
    echo '<br>';
    echo '<hr>';
} catch (PDOException $e){
    echo 'Erro de conexão: '. $e->getMessage();
}