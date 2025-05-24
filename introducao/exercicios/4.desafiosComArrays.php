<?php 

/**
 * EXERCÍCIO 01
 * 1. Crie um array chamado cidades contendo o nome de 5 cidades que você quer visitar.
 * 2. Imprima na tela o valor da terceira cidade deste array.
 */

$cidades = ["Rio de Janeiro", "Jijoca", "Penedo", "São Paulo", "Ingazeira"];
echo $cidades[2];
echo "<br>";

/**
 * EXERCÍCIO 02
 * 1. Crie um array associativo chamado $alunos onde as chaves são os nomes de três alunos e os valores são as idades deles.
 * 2. Imprima a idade do segundo aluno.
 */
$alunos = [
    "Otavio" => [
        "idade" => 18,
    ],
    "Joao Pedro" =>[
        "idade" => 19,
    ],
    "Ketley" => [
        "idade" => 17,
    ]
];
echo $alunos["Joao Pedro"]["idade"];
echo "<br>";

/**
 * EXERCÍCIO 03
 * 1. Crie um array chamado $cores contendo três cores.
 * 2. Adicione uma nova cor ao final do array.
 * 3. Remova a primeira cor do array.
 * 4. Imprima o array resultante
 */
$cores = ["Vermelho", "Verde", "Azul"];
array_push($cores,"Roxo");
// ou $cores[] = "Roxo";
array_shift($cores);

echo "<pre>";
var_dump($cores);
echo "</pre>";

/**
 * EXERCÍCIO 04
 * 1. Crie um array associativo chamado $precos onde as chaves são nomes de produtos e os valores são seus preços.
 * 2. Atualize o preco de um dos produtos adicionando + R$ 10,00
 * 3. Atualize o preço do primeiro produto reduzindo - R$ 1,00
 * 4. Imprima o array resultante
 */

$precos = [
    "playstation5" => [
        "valor" => 3350,
    ],
    "memoriaDDR5" => [
        "valor" => 350,
    ],
    "monitor4k" => [
        "valor" => 2350,
    ],
];

$precos["memoriaDDR5"]["valor"] = $precos["memoriaDDR5"]["valor"] + 10;
echo "<pre>";
var_dump($precos);
echo "</pre>";

$precos["playstation5"]["valor"] -= 1;
echo "<pre>";
var_dump($precos);
echo "</pre>";
?>

