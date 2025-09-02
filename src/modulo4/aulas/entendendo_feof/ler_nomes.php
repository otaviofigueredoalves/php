<?php

$arquivo = fopen("nomes.txt", "r");

while (!feof($arquivo)){
    $linha = fgets($arquivo);
    echo $linha;
    echo "<br>";
}
