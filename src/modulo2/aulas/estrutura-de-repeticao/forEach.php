<?php

// Para CADA ITEM de um ARRAY, FAÇA alguma coisa
// Para CADA $item do array $array faça {}

$nomes = ['Otávio', 'Alessandro', 'Bonieky'];
$dados = [
    'nome' => 'Otavio',
    'idade' => 33
];
$numeros = [1,2,3,4,5];
$copia = [];
// IDEAL PARA QUANDO VOCÊ SÓ SE IMPORTA COM O CONTEÚDO DOS ITEMS, E NÃO COM A POSIÇÃO OU O NOME QUE ELES TÊM NO ARRAY

// forEach($nomes as $nome){
//     echo "$nome <br>";
// }

// IDEAL PARA QUANDO A IDENTIFICAÇÃO DO ITEM É TÃO IMPORTANTE QUANTO O SEU VALOR, COMO EM ARRAYS ASSOCIATIVOS
foreach($dados as $chave => $dado){
    echo "$chave: $dado <br>";
}

foreach($numeros as &$numero){
    $copia[] = $numero*2; // a cada nova interação o item será adicionado ao final do array $copia
}

// echo implode(", ",$numeros);
echo implode(", ", $copia);