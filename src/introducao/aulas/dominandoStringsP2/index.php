<?php 

// DOMINANDO STRINGS P2

$texto = 'Peru, uva, maçã e salada mista';
// strlen() - Conta o número de caracteres de uma string
$numeroCaracteres = strlen($texto);
echo "Numero de caracteres: $numeroCaracteres<br>";
// strpos() - Busca a posição de uma palavra em uma string
$posicaoPalavraUva = strpos($texto,"uva");
echo "Posição da palavra tal: $posicaoPalavraUva";

// substr() - Retorna uma parte de uma string
$parteDaString = substr($texto,6,3); // aqui diz: "retorne os 3 caracteres após a posição 6"
echo "<br>";
echo $parteDaString;

?>