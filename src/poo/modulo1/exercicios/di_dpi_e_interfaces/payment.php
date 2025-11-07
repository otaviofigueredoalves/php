<?php

interface Payment
{
    public function pay(float $value);
    public function getNamePagamento();
}

class Pix implements Payment
{
    private string $nomePagamento = "PIX";

    public function pay(float $value)
    {
        echo "Processando pagamento com ".$this->getNamePagamento(). ", no valor de $value";
        return true;
    }

    public function getNamePagamento()
    {
        return $this->nomePagamento; 
    }
}
class CreditCard implements Payment
{
    private string $nomePagamento = "Credit Card";

    public function pay(float $value)
    {
        echo "Processando pagamento ". $this->getNamePagamento() . ", no valor de $value";
    }

    public function getNamePagamento()
    {
        return $this->nomePagamento;
    }
}

class FinalizarCompra
{
    private Payment $formaDePagamento;

    public function __construct(Payment $formaDePagamento)
    {
        $this->formaDePagamento = $formaDePagamento;
    }

    public function getFormaPagamento($valor)
    {
        if($this->formaDePagamento){
            return $this->formaDePagamento->pay($valor);
        } else {
            return "Pagamento falhou!";
        }
    }
}

$pix = new Pix();
$pagarPix = new FinalizarCompra($pix);

$creditCard = new CreditCard();
$pagarCreditCard = new FinalizarCompra($creditCard);

$pagarPix->getFormaPagamento(200);
echo "<br>";
$pagarCreditCard->getFormaPagamento(50);