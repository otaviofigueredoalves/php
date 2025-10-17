<?php
class Carro {

    public function acelerar(){
        echo 'Acelerando...';
    }
    public function freiar(){
        echo 'Freiando...';
    }

    // PROMOÇÃO DE PROPRIEDADES (PHP 8+): Em vez de definir as propriedades, depois definir os parâmetros e depois armazenar o valor do parâmetro desta propriedade, tudo isso manualmente, dá pra simplesmente definir as propriedades nos argumentos do __construct, ele fará todo esse processo automaticamente.
    public function __construct(public string $iCor, public string $iModelo, public int $iAno)
    {
       echo "Construindo o carro...". $this->iModelo . "...<br>";
    }
}
$carro1 = new Carro('vermelho', 'bmw', 2007);
print_r($carro1);
