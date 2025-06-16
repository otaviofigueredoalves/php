<?php 

// ARRAYS
echo '### ARRAYS<br>';
$nomes = array("Otavio","Figueredo"); // jeito antigo

$numeros = [200,300,400];

$carros = [ // array associativo, parecido com um objeto
    "Alessandro" => 1,
    "Maria" => 2,
    "Joao" => 30,
];

// echo $nomes; -> a função echo não entende se você quer imprimir Otavio ou Figueredo

echo $nomes[0];
echo "<br>";
echo $numeros[2];
echo "<br>";

echo $carros["Joao"]; // o echo não imprime o array completo, então é necessário o var_dump();
echo "<br>";

echo "<pre>";
var_dump($carros);
echo "</pre>";


// ARRAYS DENTRO DE ARRAYS
echo '### ARRAYS DENTRO DE ARRAYS';

$informacoes = [
    "Otavio" =>[
        "carros" => 0,
        "empregado" => true,
        "idade" => 18,
    ],
    "Joao" =>[
        "carros" => 1000,
        "cidade" => "Rio de janeiro",
        "altura" => 2.5
    ]
];

echo "<pre>";
var_dump($informacoes);
echo "</pre>";

echo $informacoes["Otavio"]["carros"];
echo "<br>";
// MANIPULAR ARRAYS
echo '### MANIPULAR ARRAYS';

$frutas = ["Laranja", "Limão"];
$outras_frutas = ["Abacaxi", "Mandioca", "Laranja"];
echo "<pre>";
var_dump($frutas);
echo "</pre>";

// Adicionar item ao array
echo '### ADICIONAR ITEM AO ARRAY';

array_push($frutas, "Banana"); // FUNÇÃO QUE ADICIONA

echo "<pre>";
var_dump($frutas);
echo "</pre>";

// Remover primeiro item do array;
echo '### REMOVER PRIMEIRO ITEM DO ARRAY';
array_shift($frutas);
echo "<pre>";
var_dump($frutas);
echo "</pre>";

// Remover último item do array
echo '### REMOVER ÚLTIMO ITEM DO ARRAY';

array_pop($frutas);

echo "<pre>";
var_dump($frutas);
echo "</pre>";

// Adicionar/Modificar pelo índice
echo '### ADICIONAR/MODIFICAR PELO ÍNDICE';
$frutas[2] = "Morango";
$frutas[0] = "Uva";

echo "<pre>";
var_dump($frutas);
echo "</pre>";

// Contar itens dentro do array
echo '### CONTAR OS ITENS DO ARRAY';
$quantidadeDeItems = count($frutas);
echo "<pre>";
echo $quantidadeDeItems;
echo "</pre>";

// Verificar se tem um item no array
echo '### VERIFICAR SE TEM UM ITEM NO ARRAY';
$temLaranja = in_array("Laranja",$frutas);
echo "<pre>";
var_dump($temLaranja);
echo "</pre>";

// Juntar arrays
echo '### JUNTAR ARRAYS';
$todasFrutas = array_merge($frutas, $outras_frutas);

echo "<pre>";
var_dump($todasFrutas);
echo "</pre>";


?>