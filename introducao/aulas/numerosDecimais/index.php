<?php 

// FLOAT - Precisão pós casa decimais
$altura = 1.0;
$num1 = 1.75;
$num2 = 4.30;

echo 'Adição: '.($num1+$num2);
echo "<br>";
echo 'Subtração: '.($num1-$num2);
echo "<br>";
echo 'Divisão: '.($num1/$num2);
echo "<br>";
echo 'Multiplicação: '.($num1*$num2);
echo "<br>";

// FUNÇÕES DE ARREDONDAMENTO
// round() - Irá arredondar para o número mais próximo, prioridade de arrendodar para cima

$num3 = 2.5; // irá ser 3 pois o PHP imagina um (9) como um terceiro digito
echo 'Arredondamento com round(): '.round($num3);
echo "<br>";
// floor() - irá arredondar para o inteiro mais baixo;
$num4 = 2.5;
echo 'Arredondamento com floor(): '.floor($num4);
echo "<br>";
// ceil() - irá arredondar para o inteiro mais pra cima
$num5 = 2.4;
echo 'Arredondamento com ceil(): '.ceil($num5);

?>
