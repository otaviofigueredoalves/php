<?php
/**
 * Converte uma string de número no formato brasileiro (ex: "1.234,56")
 * para um float que o PHP pode utilizar (ex: 1234.56).
 *
 * @param string $numeroString A string numérica no formato brasileiro.
 * @return float|false Retorna o número como float se a conversão for bem-sucedida,
 * ou false se a string de entrada não for um número válido após a formatação.
 */
function formatarNumeroBrasileiro(string $numeroString){
    $str_sem_ponto = str_replace('.','', $numeroString);
    $str_padrao_internacional = str_replace(',','.', $str_sem_ponto);

    if(is_numeric($str_padrao_internacional)){
        return (float)$str_padrao_internacional;
    } else {
        return false;
    }
}