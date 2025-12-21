<?php
require_once('connection.php');

try {
    $sql =  "SELECT * FROM usuarios";

    $stmt = $pdo->prepare($sql);

    if($stmt){
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $linha){
            echo "<pre>";
            var_dump($linha);
        }
    }
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage();
}