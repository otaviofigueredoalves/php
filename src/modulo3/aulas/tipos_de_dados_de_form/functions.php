<?php

/**
 * Verificar status de envio
 * @param $response Texto da resposta 
 * @return bool $response Valor da resposta
 */
function verificarStatus($response){
    if(empty($response) && $_SERVER['REQUEST_METHOD'] == false){
        return false;
    } else {
        return true;
    }
}