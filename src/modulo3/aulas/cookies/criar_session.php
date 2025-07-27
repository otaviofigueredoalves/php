<?php
session_start(); // abre uma sessão se ela não existir, lê uma sessão se ela já existir

$_SESSION['sexo'] = 'Sexo deste ser humano';
$_SESSION['idade'] = 19;
$_SESSION['nome'] = 'Otavio';

// uma sessão cria um novo cookie que serve de ID para o servidor identificar aquele usuário
// ou seja, enquanto o usuário estiver visitando a página, a sessão temporária deste usuário é identificada pelo cookie (ID) 1