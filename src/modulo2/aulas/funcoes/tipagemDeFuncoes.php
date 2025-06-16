<?php
// VAMOS TIPAR AS FUNÇÕES
// echo somar(100,200);

// TIPAMOS A FUNÇÃO E SEUS PARÂMETROS PARA EVITAR ERROS FUTUROS, ONDE NÃO SEJA POSSÍVEL, POR EXEMPLO, COLOCAR UMA STRING EM UM PROGRAMA QUE EXIGE ENTRADAS FLOAT
// A FUNÇÃO SEMPRE VAI TER UM TIPO DE RETURN, POR ISSO É BOM COLOCAR :

// function mostrar(float $num1,float $num2, float $num3 = 0): float{
//     var_dump($num1);
//     echo "<br>";
//     if ($num3 != ""){
//         return "Número 1: $num1, Numero2: $num2";
//     } else {
//         return "Número 1: $num1, Numero2: $num2, Número3: $num3";
//     };
// }

// O PROGRAMA NÃO VAI RODAR, POIS A FUNÇÃO ESTÁ RETORNANDO STRINGS, E NÓS TIPAMOS NA FUNÇÃÇO QUE SÓ PODE FLOAT

function mostrar($num1, $num2, $num3 = null){
    var_dump($num1);
    echo "<br>";
    if ($num3 != false){
        return "Número 1: $num1, Número 2: $num2, Número 3: $num3";
    } else {
        return "Número 1: $num1, Número 2: $num2";
    }
}

// echo mostrar(10,200);
// echo "<br>";

// VERIFICAR IDADE
function verificarIdade(int $anoNascimento): int{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

// VERIFICAR SE PODE ENTRAR NA BALADA
function portaoDeBalada(int $anoNascimento, bool $acompanhante = false): string{
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
// echo verificarIdade(2006);


echo "$anoAtual sem acompanhante: ".portaoDeBalada($anoAtual)."<br>";
echo "$anoAtual com acompanhante: ".portaoDeBalada($anoAtual,true);



