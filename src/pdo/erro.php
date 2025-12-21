<?php
require_once 'connection.php';
/**
 * PDO::ERRMODE_SILENT (silencioso, padrão, recomendado em produção)
 * PDO::ERRMODE_WARNING (alerta, não para o código)
 * PDO::ERRMODE_EXCEPTION (lança excessões, brutal)
 */
try {
    $sql = 'SELECT * FROM tabelaquenãoexiste';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage(); // obs, não exibimos isso em produção pois isso revela o nome da tabela e do banco. Em vez disso, nós devemos enviar esse erro para algum lugar interno no código, tipo um log
    echo "<pre>";
   var_dump($stmt->errorInfo());
}