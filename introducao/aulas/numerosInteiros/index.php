<?php 

// O PHP É INTELIGENTE O SUFICIENTE PARA TRANSFORMAR STRING EM NÚMERO SOZINHO. TUDO QUE MOSTRA NA TELA É STRING, PORÉM, ELE FAZ A CONVERSÃO PARA NÚMERO ANTES (CASO SEJA NECESSÁRIO)

// Exemplo - Integer
$idade = 33;
// adição
echo $idade+$idade; 
echo "<br>";

// subtração
echo $idade-$idade;
echo "<br>";

// divisão
echo $idade/$idade;
echo "<br>";

// multiplicação
echo $idade*$idade;
echo "<br>";

// adição com string
echo $idade+'5'; // o resultado será 38, pois o php tenta transformar a string em um número

// O recomendado é sempre trabalhar com os tipos certos pra cada variavel

?>
