<?php
class Produto{
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    } 

    public function getNome(): string{
        return $this->nome; 
    }

    public function setNome(string $nome): string
    {
        return $this->nome = $nome;
    }
    public function getPreco(): float{
        return $this->preco;
    }
    public function setPreco($preco): float{
        return $this->preco = $preco;
    }


}

$produto1 = new Produto('Playstation 5', 3000);
echo $produto1->getNome();
echo "<br>";
$produto1->setNome('Xbox');
echo $produto1->getNome();
echo "<br>";
echo $produto1->getPreco();
echo "<br>";
$produto1->setPreco(900);
echo $produto1->getPreco();

