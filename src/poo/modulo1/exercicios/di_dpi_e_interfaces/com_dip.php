<?php

interface PedidoInterface
{
    public function getNomeProduto(): string;
    public function getValor(): float;
}

class PedidoFisico implements PedidoInterface
{
    public function __construct(
        private string $nome,
        private float $preco
    ){}

    public function getNomeProduto(): string
    {
        return $this->nome;
    }

    public function getValor(): float
    {
        return $this->preco;
    }

}

class User
{
    private PedidoFisico $pedido;

    public function __construct(PedidoFisico $pedido)
    {
        $this->pedido = $pedido;
    }

    public function getMeuPedido()
    {
        return "Meu pedido é: ". $this->pedido->getNomeProduto() . " por R$ ". $this->pedido->getValor();
    }
}

$pedidoPlay = new PedidoFisico("Playstation 5", 2000);

$user1 = new User($pedidoPlay);
echo $user1->getMeuPedido();