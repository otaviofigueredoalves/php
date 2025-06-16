<?php 
// Exemplo de boolean

$estaEstudando = false;
$estaJogando = true;
$EstaEstudandoInvertido = !$estaEstudando;
// Verdadeiro - True, 1
// Falso - False, 0

// A função echo não é a ideal para mostrar o tipo de variável. Ela serve pra converter uma variavel em string e mostrar na tela

// Curiosamente, se você der echo 'estaEstudando' e ele tiver false, ele não irá exibir nada. Mas, caso o valor seja true, ele exibirá '1'
echo $estaEstudando;
// FUNÇÃO DE DEBUG - var_dump() - debug: inspecionar
echo "<br>";

var_dump($estaEstudando);
echo "<br>";
var_dump($EstaEstudandoInvertido);

// VERIFICAÇÃO LÓGICA
// (!) - inverte o valor lógico

echo "<br>";
if($estaEstudando) {
    echo "Parabéns";
} else {
    echo "vá estudar";
}

// CICLO DE LEITURA - PHP LÊ DE CIMA PARA BAIXO

// Quando eu quero reatribuir um valor na variável, usa-se =

// Caso eu queira inverter o valor lógico de $estaEstudando, apenas fazer !$estaEstudando não basta, pois o ! apenas retorna um valor, ele não altera a variável em si. Isso vale para outras funções, elas não alteram o valor da variável, apenas retornam o valor alterado.

// $estaEstudando = !$estaEstudando  // atribui o valor alterado à variavel
?>
