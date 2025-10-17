<?php
/**
 * EXEMPLO COM CONTA BANCÁRIA
 * 
 * Se deixar a propriedade da classe como public, é possível acessá-la pelo código externo, ou seja, fora da classe.
 * Mas caso a propriedade seja PRIVATE, NÃO será possível acessá-la diretamente, sendo necessário uma função pra retornar o valor da propriedade
 */

class Conta {
    public int $saldo;

    public function __construct($saldo){
        $this->saldo = $saldo;
    }

    public function depositar(int $saldo){

        echo 'Saldo anterior: '.$this->saldo . "<br>";
        $this->saldo += $saldo;
        echo 'Você depositou ' . $saldo . "<br>";
        echo 'Saldo atual: '.$this->saldo . "<br>";
    }
    public function sacar(int $saque){
        echo 'Saldo anterior: '.$this->saldo . "<br>";
        $this->saldo -= $saque;
        echo 'Você sacou ' . $saque . "<br>";
        echo 'Saldo atual: '.$this->saldo . "<br>";
    }
}

$conta1 = new Conta(1000);
$conta1->depositar(500);

$conta1->sacar(1000);