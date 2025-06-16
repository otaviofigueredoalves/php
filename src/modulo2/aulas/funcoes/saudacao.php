<?php
// OBS: Definir uma função significa definir ela na memória. Ou seja, não significa que ela foi ou será utilizada. Pra isso, é necessário chamá-la.

function saudacao(){
    return 'Hello world!'; // O valor está sendo retornado, mas ele não será impresso na tela, pois, a função está retornando apenas o VALOR. Para usar esse valor, você pode guardar o retorno da função em uma variável. Você também poderia chamar a função sem retorno. Nesse caso: echo 'Hello World', e aí o valor da função seria NULL, pois a função nunca retorna um valor. OBS: preferível usar o return
}

$x = saudacao();
echo $x;
var_dump($x);
?>