<?php

/**
 * Somando dois números
 * 
 * @param float $num1 Primeiro número a ser somado
 * @param float $num2 Segundo número a ser somado
 * 
 * @return float Soma entre os dois números
 */
function somar(float $num1, float $num2): float{
    return $num1 + $num2;
}

echo somar(10,20);