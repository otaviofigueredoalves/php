<?php

$relative_path = './dados/nomes2.txt';
$absolute_path = realpath($relative_path);

if(file_exists($absolute_path)){
    echo "O arquivo $absolute_path existe!";
} else {
    echo "Arquivo não existe";
}