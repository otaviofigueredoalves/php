<?php
require_once("connection.php");

$sql_delete = "DELETE FROM usuarios WHERE id_usuario = 13";

$stmt = $pdo->prepare($sql_delete);
$stmt->execute();