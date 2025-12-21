<?php
require_once("connection.php");
try {
    $id = "9; UPDATE usuarios set name = 'TrollMasterAbatido'; --";
    $sql = "SELECT * FROM usuarios WHERE id_usuario = :id;";
    // $stmt = $pdo->query($sql); Vulneravel a SQL Injection
    // $stmt->execute(); // Tem mais proteção a SQL Injection pois não permite 2 comandos na mesma query. Porém ainda é possível fazer um UNION SELECT
    /**
     * IDEAL CONTRA SQL INJECTION
     */
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id',$id); // pdo limpa e isola o dado
    $stmt->execute();

    if($stmt){
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>";
        var_dump($data);
        // foreach($data as $linha){
        //     echo "<pre>";
        //     var_dump($linha);
        // }
    }


} catch (PDOException $e){
    echo "Erro: ".$e->getMessage();
}
