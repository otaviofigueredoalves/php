<?php

class Conta{
    private int $saldo;

    public function __construct(int $saldo)
    {   
        $this->saldo = $saldo;
    }

    public function depositar($valorDepositado){
        if($valorDepositado > 100){
            return "Não é possível depositar valores acima de R$100, como R$$valorDepositado";
        }
        if($valorDepositado < 1){
            return "Não é possível depositar valores menores que R$01.00, como R$$valorDepositado";
        }

        $this->saldo+=$valorDepositado;
        return "Realizando um depósito de R$".$valorDepositado;
    }
    public function sacar($valorSacado){

        if($valorSacado > $this->saldo){
            return "Você não tem saldo suficiente pra sacar R$ $valorSacado";
        }

        if($valorSacado < 1){
            return "Você não pode sacar valores abaixo de R$01.00, como R$$valorSacado";
        }
        $this->saldo-=$valorSacado;
        return "Realizando um saque de R$". $valorSacado;
    }

    public function verSaldo(){
        return $this->saldo;
    }
}


$conta1 = new Conta(100);

echo "Saldo atual: ";
echo $conta1->verSaldo();
echo "<br>";
echo $conta1->depositar(100);
echo "<br>";
echo "Saldo atual: ";
echo $conta1->verSaldo();
echo "<br>";
echo $conta1->sacar(700);
echo "<br>";
echo "Saldo atual: ";
echo $conta1->verSaldo();