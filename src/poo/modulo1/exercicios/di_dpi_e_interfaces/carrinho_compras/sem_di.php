<?php

class CarrinhoCompras // classe concreta com duas propriedades
{
    public function __construct(private string $formaEnvio, private float $valorProduto)
    {}

}


class Usuario // classe usuário que consumirá a classe concreta diretamente
{
    private CarrinhoCompras $carrinho; // aqui é onde será armazenado a instância da classe concreta

    public function fazerOPedido($formaEnvio, $valorProduto) // função que receberá parâmetros externos
    {
        $this->carrinho = new CarrinhoCompras($formaEnvio, $valorProduto); // instancia o objeto CarrinhoCompras na propriedade do tipo CarrinhoCompras, recebe os parâmetros definidos enviados na instância 
        return $this->carrinho; // retorna o objeto instanciado
    }
}


$user1 = new Usuario();
var_dump($user1->fazerOPedido("SEDEX", 20.00));