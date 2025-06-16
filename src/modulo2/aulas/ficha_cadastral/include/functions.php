<?php
include 'data_clone.php';

// calculo do salário anual
function calcularSalarioAnual(float $salario_mensal): float{
    return $salario_mensal * 12;
}

// quantos anos faltam para se aposentar
function anosParaAposentar(int $idade, string $sexo): int{
    if ($sexo == 'M'){
        return IDADE_APOSENTADORIA_MASCULINA - $idade;
    } else {
        return IDADE_APOSENTADORIA_FEMININA - $idade;
    }
}
// transformar um valor em monetário
function formatarSalario(float $salario_mensal): string{
    return number_format($salario_mensal,2,",",".");
}

function listarHabilidades($habilidades){
    return implode(', ',$habilidades);
}

$salario_anual= calcularSalarioAnual($salario_mensal);
echo "<br>";
$salario_mensal = formatarSalario($salario_mensal);
echo "<br>";
$total_aposentar = anosParaAposentar($idade, $sexo);
echo "<br>";
$habilidades = listarHabilidades($habilidades);