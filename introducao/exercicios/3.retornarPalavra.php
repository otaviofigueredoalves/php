<?php 
// Retirara apenas a palavra "Pera" utilizando substr();
$texto = "Maça, uva, banana, pera";
$localizarPalavraPera = strpos($texto, "pera");
$tirarPalavra = substr($texto, $localizarPalavraPera - 1);

echo "$tirarPalavra<br>";

// Agora, retornar uva e banana
// uva
$localizarPalavraUva = strpos($texto, "uva");

$tirarPalavra = substr($texto, $localizarPalavraUva, 3);
echo "$tirarPalavra<br>";

$localizarPalavraBanana = strpos($texto, "banana");
$tirarPalavra = substr($texto, $localizarPalavraBanana, 6);
echo "$tirarPalavra<br>";

?>