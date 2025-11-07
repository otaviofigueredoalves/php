<?php

function processarPagamento(MetodoPagamento $formaPagamento, $valorPagamento){
    echo 'Processando pix via '.$formaPagamento->getName() . ' no valor de R$ '.$valorPagamento;

    if($formaPagamento->pagar($valorPagamento)){
        echo '<br>Pagamento realizado com sucesso';
    } else {
        echo '<br>Pagamento não realizado';
    }
}