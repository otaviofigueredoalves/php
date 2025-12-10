<?php
require_once 'connection.php';

// $pdo

// query

// OBS: O bindParam não se aplica aqui pois os Prepared Statements em geral servem pra proteger valores de DADOS, e não IDENTIFICADORES DE ESTRUTURA, como: nomes de tabela, nomes de colunas ou tipos de dados. Ou seja, bindParam você vai usar para inserir ou buscar dados.

/**
 * CRIANDO USUARIOS TABELA
 */

// $sql_table_create = 'CREATE TABLE usuarios (
// id_usuario INT AUTO_INCREMENT PRIMARY KEY, 
// name VARCHAR(100), 
// username VARCHAR(20), 
// password VARCHAR(255)
// )';

// // STATEMENT, QUERY PREPARADA PRO PDO CONSEGUIR INSERIR DADOS NELA
// $stmt = $pdo->prepare($sql_table_create);
// // var_dump($stmt);
// $stmt->execute();



// Hora de inserir dados
$query_insert = 'INSERT INTO usuarios (
    name,
    username,
    password
) VALUES (
    :name,
    :username,
    :password
);';

// simulando variaveis privadas (dentro da classe)
$_name = 'Hbigfake';
$_username = 'hbigfake';
$_password = 'senha';

// preparando query, de string pra objeto statement
try {
    $stmt = $pdo->prepare($query_insert);
    // bindParam é o statement pra passar o parâmetro
    $stmt->bindParam(':name', $_name);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':password', $_password);
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage();
}


var_dump($stmt->execute());