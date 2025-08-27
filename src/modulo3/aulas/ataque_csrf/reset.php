<?php
session_start();
$_SESSION['user'] = 'Otávio';
$_SESSION['saldo'] = 51000;
echo 'Saldo resetado';