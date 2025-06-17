<?php
include 'data_clone.php';

// calculo do salário anual
/**
 * Calcular o salario anual do trabalhador
 * @param float $salario_mensal Salário mensal
 * @return float Salário anual
 */
function calcularSalarioAnual(float $salario_mensal): float{
    $tercoDeFerias = $salario_mensal / 3;
    return $salario_mensal = ($salario_mensal * 13) + $tercoDeFerias;

}

// quantos anos faltam para se aposentar
/**
 * Calcular quantos anos falta para a aposentadoria
 * @param int $idade Idade do indivíduo
 * @param string $sexo Secso do indivíduo
 * @return int Quantos anos falta pro indivíduo se aposentar
 */
function anosParaAposentar(int $idade, string $sexo): int{
    if ($sexo == 'M'){
        return IDADE_APOSENTADORIA_MASCULINA - $idade;
    } else {
        return IDADE_APOSENTADORIA_FEMININA - $idade;
    }
}
// transformar um valor em monetário
/**
 * Manter um formato padrão para o salário
 * @param float $salario Salario do ser humano
 * @return string Salário do ser humano formatadissimo
 */
function formatarSalario(float $salario): string{
    return number_format($salario,2,",",".");
}
/**
 * Listar as habilidades do coisa
 * @param array $habilidades Formata o array de habilidades em uma string
 */
function listarHabilidades(array $habilidades): string{
    return implode(', ',$habilidades);
}

$salario_anual= calcularSalarioAnual($salario_mensal);
$salario_anual_formatado = formatarSalario($salario_anual);
$salario_mensal = formatarSalario($salario_mensal);
$total_aposentar = anosParaAposentar($idade, $sexo);
$habilidades = listarHabilidades($habilidades);