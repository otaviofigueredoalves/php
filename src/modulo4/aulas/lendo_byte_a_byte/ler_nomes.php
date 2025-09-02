<?php

// 99% dos sistemas web tem alguma ferramenta de LOGS, que são linha a linha de ações que ocorre no seu sistema. Os logs são salvos em arquivos.
// É importante saber isso não só por logs, mas também, por exemplo, quando faz o upload de uma foto, se é mesmo uma foto, para onde vai essa foto...

// Agora, vamos aprender

$arquivo = fopen("nomes.txt","r"); // RESOURCE

// Ler conteúdo do arquivo
// $nomes = fread($arquivo, 1); // Uma letra ocupa 1 byte

$nomes = fread($arquivo, 5);
$nomes2 = fread($arquivo, 1);
$nomes3 = fread($arquivo,2);
print_r($nomes);
print_r($nomes2);
print_r($nomes3);

// O que acontece aqui é que o ponteiro lê o arquivo byte a byte da esquerda pra direita e o resource armazenará a informação desse ponteiro, por isso $nomes e $nomes2 não são iguais, em $nomes foi lido 5 bytes, então ele leu 'Carlo' e em $nomes2 ele leu 1 byte, 's', formando assim: 'Carlos'

// É importante ressaltar que, após o 'Carlos', se tiver mais nomes como 'Maria', intuitivamente nós consideramos que se foram 6 bytes para ler carlos então o ponteiro para ler 'Maria' partirá da posição 6, mas isso não está certo. Se colocar pra ler mais 2 bytes, vai retornar "\r\n", pois quando você dá 'ENTER' em um arquivo de texto ele aplica uma quebra de linha, e o PHP lê isso como '\n', que é representada por 2 caracteres: '\n'. Então, o ponteiro só começará a contar Maria no byte 9.

// OBS: No linux, o \n é considerado como 1 BYTE.