<?php

/**

 * EXEMPLO COM ACOPLAMENTO FORTE

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


class User_B

{

    private Pedido $pedido;


    public function fazerPedido($pedido, $preco)

    {

        $this->pedido = new Pedido($pedido, $preco);
    }


    public function getPedido()

    {

        return $this->pedido;
    }
}


$user = new User_B();

$user->fazerPedido("Playstation", 2500);

var_dump($user);
