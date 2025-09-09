<?php
include __DIR__ . '/includes/header.php';
// $login = __DIR__ . '/pages/login.php';
// $cadastro = __DIR__ . '/pages/cadastro.php';
?>

<main>
    <?php 
        if(!empty($_SESSION['user'])){
            include __DIR__ . '/pages/login.php';
        } else {
            include __DIR__ . '/pages/cadastro.php';
        }
    ?>
</main>


