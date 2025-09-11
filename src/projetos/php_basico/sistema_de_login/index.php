<?php
include __DIR__ . '/pages/back_login.php';
include __DIR__ . '/includes/header.php';

$erro = null;
// $login = __DIR__ . '/pages/login.php';
// $cadastro = __DIR__ . '/pages/cadastro.php';
?>

<main>
    <?php 
        if(!empty($_SESSION['user_name'])){
            include __DIR__ . '/pages/login.php';
        } else {
            include __DIR__ . '/pages/cadastro.php';
        }
    ?>
</main>
<?php

if(!empty($erro)){
    echo $erro;
}   

