<?php

class CarrinhoCompras 
{
    public function __construct(private string $formaEnvio, private float $valorProduto)
    {}
   
    public function getInfo(){
        return "Carrinho com {$this->formaEnvio}, valor de {$this->valorProduto}";
    }
}


class Usuario 
{
    private CarrinhoCompras $carrinho; 

    public function fazerOPedido($carrinho)
    { 
        $this->carrinho = $carrinho;
    }

    public function getCarrinhoInfo(){
        return $this->carrinho->getInfo();
    }
}

$user1 = new Usuario();
$carrinhoCompras = new CarrinhoCompras("SEDEX",20);

$user1->fazerOPedido($carrinhoCompras);
echo $user->getCarrinhoInfo();