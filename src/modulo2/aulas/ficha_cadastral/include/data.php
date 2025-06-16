<?php 
// CONSTS
require 'include/consts.php';


// VARIAVEIS
$nome = "Otavio Figueredo";
$habilidades = ["PHP", "Javascript", "HTML", "CSS"];
$sexo = 'M';
$idade = 18;
$salario_mensal = 2700.53;
$salario_anual = 2500 * 12;
$esta_empregado = true;

// FUNÇÕES
$salario_mensal = number_format($salario_mensal,2,",",".");
$habilidades = implode(', ', $habilidades);

// LÓGICA
$total_aposentar = $sexo == "M" ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA; 
$total_aposentar -= $idade;

if ($esta_empregado != true) {
    $esta_empregado = "Não está empregado!";
} else {
    $esta_empregado = "Está empregado";
}




?>