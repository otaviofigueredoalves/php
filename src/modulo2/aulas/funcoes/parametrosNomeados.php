<?php

function semParametrosNomeados(string $nome, string $sobrenome, int $idade): string{
    return "Olá, $nome $sobrenome. Você tem $idade anos";
}
function comParametrosNomeados(string $nome, string $sobrenome, int $idade): string{
    return "Olá, $nome $sobrenome. Você tem $idade anos";
}

// CHAMADA NORMAL
echo semParametrosNomeados("Otávio","Figueredo",19); // chamada sem utilizar parâmetros nomeados
echo "<br>";
// CHAMADA COM PARÂMETROS NOMEADOS (OBS: A ORDEM NÃO IMPORTA)
// Não é preciso definir o tipo
echo comParametrosNomeados(nome: 'Otávio', idade: 19, sobrenome: 'Figueredo');