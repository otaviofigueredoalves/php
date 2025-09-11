<?php 
session_start();
if(empty($_SESSION['user_name'])){
    header("Location: ../index.php");
}
?>
<h1>SEJA BEM-VINDO A ESTA PÁGINA MEU QUERIDO!</h1>