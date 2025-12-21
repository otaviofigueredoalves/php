<?php
require_once('connection.php');

try{
    $sql = "ALTER TABLE usuarios MODIFY name VARCHAR(50) NOT NULL UNIQUE";

    $stmt = $pdo->prepare($sql);

    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo 'Modificado com sucesso';
        } else {
            echo 'Nada foi modificado';
        }
    } else {
        throw new \Exception('Erro ao conectar com o banco de dados');
    }

  
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage();
}
