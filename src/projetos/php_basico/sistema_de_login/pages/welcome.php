<?php
session_start();
if(empty($_SESSION['user_name'])){ // impede que o usuário acesse a página logada sem estar logado. Ele poderia tentar acessar via URL
    header("Location: ../index.php"); // maanda de volta para a página principal
}
?>
<h1>Olá <?=$_SESSION['user_name']?></h1> <!-- Exibe o nome guardado na sessão, se não existir, exibirá null-->
<h2>Quer fazer logout? Clique em <a href="./logout.php">Logout</a></h2>