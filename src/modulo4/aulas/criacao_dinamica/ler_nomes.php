<?php
/**
 * fopen - abre arquivo
 * fgets - pega 1 linha do arquivo
 * fclose - fecha o arquivo
 * fwrite - escrever
 * truncate - apagar tudo
 * 
 * ## MODOS
 * a - Cria o arquivo se ele não existir, posiciona o ponteiro no final
 * c - Abre o arquivo e posiciona o cursor no inicio do arquivo
 * w - Cria o arquivo se ele não existir, apaga o conteúdo do arquivo anterior
 * w+ - Cria o arquivo se ele não existir, apaga o conteúdo anterior e posiciona o ponteiro no final
 * r - Abre o arquivo para leitura, posiciona o ponteiro no inicio e gera um erro se não existir
 * r+ - Abre o arquivo pra leitura e escrita, posiciona o ponteiro no inicio e gera um erro se não existir
 * x - Criação Exclusiva - Abre o arquivo para escrita somente se ele já existir (usado muito em logs diários)
 */


$arquivo = fopen("nomes.txt", "a");

fwrite($arquivo, 'São Paulo');