<?php 

/**
 * ###### EXERCÍCIO 01
 * Crie um script PHP que simula um sistema de login simples
 * O sistema deve verificar se o nome de usuário e a senha fornecidos estão corretos.
 * Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
 * Se o nome de usuário estiver correto, mas a senha estiver errada, exiba uma mensagem de erro de senha.
 * Se o nome de usuário estiver incorreto, exiba uma mensagem de erro de nome de usuário
 */

// #### RESOLUÇÃO
// $usuarioCorreto = "admin";
// $senhaCorreta = 13590;

// $usuario = "admin";
// $senha = 13590;

// if ($usuarioCorreto == $usuario && $senhaCorreta == $senha){
//     echo "Boas-vindas!";
// } else if ($usuarioCorreto == $usuario && $senhaCorreta != $senha){
//     echo "Erro de senha!";
// } else if ($usuarioCorreto != $usuario && $senhaCorreta == $senha){
//     echo "Erro de usuário!";
// } else {
//     echo "Usuário e senha incorretos!";
// }

/**
 * ###### EXERCÍCIO 02
 * Crie um script PHP que verifica se uma pessoa pode entrar em uma festa.
 * Para entrar na festa, a pessoa precisa ter pelo menos 18 anos ou estar acompanhada de um responsável
 */

#### RESOLUÇÃO
// $idade = 17;
// $acompanhada = false;

// if ($idade >= 18 || $acompanhada){
//     echo "Pode entrar na festa";
// } else {
//     echo "Não pode entrar na festa";
// }

/**
 * ###### EXERCÍCIO 03
 * Crie um script PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto.
 * O cliente tem direito ao desconto de 20% se o valor total de suas compras for maior que R$ 200 ou se ele for um membro VIP
 * Se o valor total das compras estiver entre R$ 150 e R$ 200, o cliente pode receber um desconto de 10%
 */


$valorTotal = 209;
$membroVip = false;

if ($valorTotal >= 200 || $membroVip){
    $descontoPercent = 20;
    $desconto = $valorTotal - $valorTotal*0.2;
} else if ($valorTotal > 150 && $valorTotal < 200){
    $descontoPercent = 10;
    $desconto = $valorTotal - $valorTotal*0.1;
} else {
    echo "Sem desconto!";
}


echo "Você tem direito a $descontoPercent% de desconto, pagará apenas $desconto reais";
?>