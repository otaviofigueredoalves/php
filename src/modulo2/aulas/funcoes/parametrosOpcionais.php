<?php
// Caso queira trabalhar com parâmetros opcionais, você pode definir um valor para o parâmetro desejado. Se não quiser que o valor opcional apareça, você pode tratar utilizando de condicionais.

// SEM TRATAR
// function somar($num1, $num2, $num3 = 0){
//     return "Número 1: $num1, Numero2: $num2, Número3: $num3";
// }

// echo somar(100,200);

// TRATANDO
function mostrar($num1,$num2,$num3 = null){
    if ($num3 == null){
        return "Número 1: $num1, Numero2: $num2";
    } else {
        return "Número 1: $num1, Numero2: $num2, Número3: $num3";
    }
}
echo mostrar(100,200);
echo "<br>";
// VERIFICAR IDADE
function verificarIdade($anoNascimento){
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}
// VERIFICAR SE PODE ENTRAR NA BALADA
function portaoDeBalada($anoNascimento, $acompanhante = false){
    $idadeParaEntrarNaBalada = 18;
    $idadeAtual = verificarIdade($anoNascimento);

    if($idadeAtual < $idadeParaEntrarNaBalada && $acompanhante != true){
        return "NÃO ENTRA!";
    } elseif($idadeAtual >= $idadeParaEntrarNaBalada && $acompanhante != true){
        return "PODE ENTRAR!";
    } elseif ($idadeAtual < $idadeParaEntrarNaBalada && $acompanhante == true) {
        return "PODEM ENTRAR!";
    } else {
       return "PODEM ENTRAR!";
    }
}
echo "<br>";
$anoAtual = 2000;
echo "$anoAtual sem acompanhante: ".portaoDeBalada($anoAtual)."<br>";
echo "$anoAtual com acompanhante: ".portaoDeBalada($anoAtual,true);