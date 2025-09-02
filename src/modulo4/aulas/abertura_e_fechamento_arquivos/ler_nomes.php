<?php
// Para trabalhar com arquivos utilizamos a biblioteca filesystem
// f(alguma coisa) - file - arquivo
// fopen - abrir arquivo
// fclose - fechar arquivo
// Garbage Collector - É um coletor de lixo de memória, ele coleta arquivos que não foram fechados com f(close), limpando a memória. Claro, não iremos contar com ele sempre pois ele passa de vez em quando, mesmo sendo rápido, não é mais performático que utilizar a função f(close)


$arquivo = fopen("nomes.txt","r"); // ler arquivo (r - read)
// print_r($arquivo); // irá imprimir um RESOURCE

/**
 * RESOURCE é um tipo EXCLUSIVO DO PHP para lidar com leitura de arquivos, conexão com banco de dados, apis... elas são tratadas como RESOURCE
 * 
 * Resource é um tipo de dado especial do PHP, usado historicamente para gerenciar referências a recursos externos como arquivos e conexões.
 * 
 * O Resource é como a chave de quarto para um hotel, em vez de ter o quarto todo no bolso, a chave é mais viável pois é leve, simples e sem valor fora do hotel. Você pode abrir o quarto (fread), fazer um pedido (fwrite) e fechar o quarto (fclose);
 * 
 * O resource em PHP é exatamente isso: uma variável especial que atua como um ponteiro ou referência para um recurso externo (um arquivo aberto, uma conexão de banco de dados, um fluxo de imagem, etc.) que é gerenciado fora do código PHP. A variável em si contém apenas um identificador para que o motor do PHP (Zend Engine) saiba qual recurso externo usar.
 * 
 * 
 * Esse recurso existe pois o PHP, como uma linguagem de alto nível, não consegue se comunicar com sistemas de baixo nível. Aí que entra o resource, ele serve de ponte entre o PHP e esses sistemas, como: O sistema de arquivos do sistema operacional, conexões de rede (sockets), servidores de banco de dados que operam como processos separados e bibliotecas de manipulação de imagem (como a GD).
 * 
 * O Resource é alocado na memória e o nosso caminho aponta pra ele com uma referência (variável), enquanto este resource estiver aberto outro recurso/função não conseguirá acessá-lo, por isso é necessário fechar
 * 
 * 
 * GARBAGE COLLECTOR
 * Um caminhão de lixo ambulante que passa de vez em quando coletando o lixo da memória
 * 
 * Em linguagens como C, o programador é 100% responsável por alocar um espaço da memória e liberar
 * 
 * Quando ele esquece de liberar esse espaço da memória, a memória fica reservada pro programa mas, inacessível, pois a variável se perde
 * 
 */

if($arquivo){
    echo "Arquivo lido com sucesso";
    fclose($arquivo);
} else {
    echo "Erro ao ler o arquivo";
}
print_r($arquivo);