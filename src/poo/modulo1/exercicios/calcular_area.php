<?php

/**
 * Diferenças importantes
 * PUBLIC: Todos tem acesso, classe, filhos e código externo
 * PROTECTED: Classes e filhos tem acesso
 * PRIVATE: Apenas a classe da propriedade privada tem acesso
 */


abstract class Forma
{
    public abstract function calcularArea();

    public function exibirCalculo(){ // Este é um método concreto (possuem implementação). Ou seja, não necessariamente todos os métodos da classe abstrata serão abstratos
        $tipoDaForma = get_class($this);
        $area = $this->calcularArea();

        echo "Este $tipoDaForma tem a área de $area<br>";
    }
}

class Quadrado extends Forma
{
    public float $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }
}

class Retangulo extends Forma
{
    public float $largura;
    public float $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}

class Triangulo extends Forma
{
    public float $base;
    public float $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2;
    }
}


$quadrado = new Quadrado(10);
$retangulo = new Retangulo(5,5);
$triangulo = new Triangulo(4,15);


$quadrado->exibirCalculo();
$retangulo->exibirCalculo();
$triangulo->exibirCalculo();