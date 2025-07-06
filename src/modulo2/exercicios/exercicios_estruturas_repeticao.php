<?php

/**
 * Exercícios com WHILE
 */


// 1. Crie um script para escrever a tabuada do 5 (5x1 a 5x10) com while
echo "### CALCULADORA ### <br>";

$numero = 5;
$count = 1;
while($count <= 10){
    $multiplicar = $numero*$count;
    echo "$numero x $count = $multiplicar <br>";
    $count++;
}

echo "#####################<br>";

// 2. Crie um script para escrever a soma de todos os numeros de 1 a 20 com while

echo "### SOMA DOS NÚMEROS ### <br>";
$count = 0;
$soma = 0;
while($count <= 20){
    echo "$soma + $count<br>";
    $soma+=$count;
    $count++;
}
echo "A soma é $soma<br>";

/**
 * Exercícios com FOR
 */

// 1. Crie um script que escreva todos os números de 1 a 10 com FOR

for ($i = 1; $i <= 10; $i++){
    echo "$i<br>";
}


// 2. Escreva um script PHP que desenhe meio triângulo com asteriscos (*).
/**
 * : *
 * : **
 * : ***
 */
$alturaTriangulo = 10;

for ($y = 0; $y < $alturaTriangulo; $y++){
    for($x = 0; $x <= $y; $x++){
        echo "*";
    }
    echo "<br>";
}

/**
 * Exercícios com forEach
 */

// 1. Crie um array de números e use um loop foreach para somar todos os elementos do array e imprimir o resultado

$somando_numeros = [1, 2, 3, 4, 5];
$somados = 0;
foreach ($somando_numeros as $numero){
    echo "Número atual é $numero, soma é $somados<br>";
    $somados += $numero;
}
echo $somados;
echo "<br>";

//2. Crie um array associativo de produtos
$produtos = [
    'Laranja' => [
        'Preco' => 10,
        'Qtd' => 3,
    ],
    'Playstation' => [
        'Preco' => 50,
        'Qtd' => 1,
    ],
    'Sofa' => [
        'Preco' => 20,
        'Qtd' => 2,
    ]
];
$subtotal = 0;

forEach($produtos as $nome => $valor){
    $subtotal += ($valor['Preco'] * $valor['Qtd']);
    $valor = $valor['Preco'];
    echo "Nome: $nome| Preço: $valor <br> ";
}
echo "Subtotal é R$$subtotal";