<?php

$arquivo = fopen("nomes.txt","r");

// $bytes = filesize("nomes.txt");
// var_dump($bytes);

// $nomes = fread($arquivo,$bytes);
// echo $nomes;

$nome1 = fgets($arquivo);
echo $nome1;