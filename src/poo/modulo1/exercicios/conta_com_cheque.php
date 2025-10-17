<?php

class Conta{
    private int $saldo;
    private int $chequeEspecial;

    public function __construct(int $saldo, bool $chequeEspecial = false)
    {   
        $this->saldo = $saldo;
        $this->chequeEspecial = $chequeEspecial;
        
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

        if($valorSacado > $this->saldo && $this->chequeEspecial == false){
            return "Você não tem saldo suficiente pra sacar R$ $valorSacado";
        }

        if($valorSacado > $this->saldo + 100 && $this->chequeEspecial == true){
            return "Você não pode sacar mais do que o valor do saldo + cheque especial";
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


$conta1 = new Conta(600);

echo "Saldo atual: ";
echo $conta1->verSaldo();
echo "<br>";
echo $conta1->depositar(100);
echo "<br>";
echo "Saldo atual: ";
echo $conta1->verSaldo();
echo "<br>";
echo $conta1->sacar(800);
echo "<br>";
echo "Saldo atual: ";
echo $conta1->verSaldo();
echo "<hr>";
$conta2 = new Conta(600,true);

echo "Saldo atual: ";
echo $conta2->verSaldo();
echo "<br>";
echo $conta2->depositar(100);
echo "<br>";
echo "Saldo atual: ";
echo $conta2->verSaldo();
echo "<br>";
echo $conta2->sacar(800);
echo "<br>";
echo "Saldo atual: ";
echo $conta2->verSaldo();