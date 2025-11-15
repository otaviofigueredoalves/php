<?php

trait TCurtivel
{
    private float $curtidas = 0;
    public function curtir()
    {
        $this->curtidas++;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }
}


class Artigo
{
    use TCurtivel;

    public function __construct(public string $titulo)
    {}

    public function lerArtigo(){
        echo "O artigo {$this->titulo} é ótimo";
    }
}
class Produto
{
    use TCurtivel;

    public function __construct(public string $titulo, public float $preco)
    {}

    public function analisarProduto(){
        echo "O produto {$this->titulo} é ótimo e só custa {$this->preco}. É muito aclamado, possui: {$this->getCurtidas()} de curtidas";
    }
}

$artigo = new Artigo("Opinião bombástica");
$artigo->curtir();
$artigo->lerArtigo();

echo "<hr>";
$produto = new Produto("XBOX Series S", 2000);
$produto->curtir();
$produto->curtir();
$produto->analisarProduto();