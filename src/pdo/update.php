<?php
require_once('connection.php');

try {
    $id = 11;
    $novo_nome = 'Ketley';
    $username = 'ketyperdz';

    $sql = "UPDATE usuarios set name = :novo_nome, username = :username WHERE id_usuario=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':novo_nome',$novo_nome);
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':id',$id);
    $query_execute = $stmt->execute(); // não depende dos dados, true ou false aqui vão se referir à CONEXÃO com o banco

    if($query_execute){
        if($stmt->rowCount() > 0){
            echo 'Usuário atualizado <br>'; 
            echo $stmt->rowCount() . ' Linhas afetadas';
        } else {
            echo 'Os dados são iguais! Nenhuma linha afetada';
        }
    } else {
        echo 'Erro fatal <br>';
    }
} catch (PDOException $e){
    echo 'Erro: '. $e->getMessage();
}
