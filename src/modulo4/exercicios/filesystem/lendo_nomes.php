<?php

$arquivo = fopen("nomes.txt", "r");
$bytesArquivo = filesize("nomes.txt");
$nomes = fgets($arquivo);
$nome = strlen($nomes);

while ($nome <= $bytesArquivo){
    if($nomes != false){
        echo $nomes;
        $nomes = fgets($arquivo);
        $nome += strlen($nomes);
        echo "<br>";
    } else {
        fclose($arquivo);
        break;
    }
}
