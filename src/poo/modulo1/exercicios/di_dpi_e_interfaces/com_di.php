<?php
/**
 * EXEMPLO COM ACOPLAMENTO FRACO
 */


class Pedido
{
    public string $produto;
    public int $preco;

    public function __construct($produto, $preco)
    {
        $this->produto = $produto;
        $this->preco = $preco;
    }
}

class User_A
{
    private Pedido $pedido;

    public function fazerPedido(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function getPedido()
    {
        return $this->pedido;
    }
}

$user = new User_A();
$user->fazerPedido(new Pedido("Playstation", 2500));
var_dump($user);