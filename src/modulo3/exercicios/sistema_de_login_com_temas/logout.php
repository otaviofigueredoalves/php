<?php
session_start();
$_SESSION = array();
session_destroy();
setcookie('tema','',-1);
header('Location: index.php');