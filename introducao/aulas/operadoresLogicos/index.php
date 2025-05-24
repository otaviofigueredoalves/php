<?php 

// Operadores lógicos

// $$ Operador lógico E - Verifica se ambas condições são verdadeiras
$idade = 18;
$temCarteira = true;

if($idade >= 18 && $temCarteira){
    echo "Você pode dirigir!";
} else {
    echo "Você não pode dirigir!";
}

echo "<br>";

// || Operador lógico OU - Verifica uma das condições são falsas;
$temCarteira = false;
$idade = 18;

if($idade >= 18 || $temCarteira){// detalhe: não é necessário especificar que $temCarteira == true, pois o próprio if irá verificar se a condição é true 
    echo "Você pode dirigir uma nave espacial";
}

echo "<br>";

// (!) Operador lógico de negação

// null == false;
// 0 == false
// 1 == true

$temCarteira = "a";

if ($temCarteira === false){
    echo "Você não pode dirigir!";
} else if($temCarteira === true){
    echo "Você pode dirigir!";
} else {
    echo "Acho que você não pode dirigir!";
}

?>