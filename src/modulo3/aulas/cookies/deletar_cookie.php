<?php

// PARA DELETAR O COOKIE, VOCÊ FORÇA ELE A EXPIRAR E QUEM DELETA É O NAVEGADOR
// Ou seja, pra deletar o cookie, você deve defini-lo novamente com uma data de expiração no passado

setcookie('meu_cookie3','valor_do_meu_cookie', time() - 1);