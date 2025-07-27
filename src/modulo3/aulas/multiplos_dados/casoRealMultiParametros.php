<?php

// CENÁRIO REAL - Campanha de email marketing, uma empresa dispara vários emails com o link do site dela. Ela quer saber qual desses emails o carinha clicou pra parar no site dela

// Clique aqui > www.empresa.com.br
// Clique aqui > www.empresa.com.br?campanha=1
// Clique aqui > www.empresa.com.br?campanha=2

$numero_campanha = $_GET['campanha'];
echo "Você veio pela campanha $numero_campanha";

// O site vai pegar o 'campanha' e vai salvar no back-end/banco de dados

// validando dados
// isSet()


// O problema daqui é que não validamos os dados, ou seja, o backend pode aceitar valores indesejados, como false, null, undefined. Para resolver isso, precisamos tratar os dados