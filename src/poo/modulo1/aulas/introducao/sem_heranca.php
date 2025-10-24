<?php
// SEM HERANÇA
class Carro{
    public string $modelo;
    public string $cor;
    public string $placa;
    public int $qtdPortas;

    public function __construct($modelo, $cor, $placa, $qtdPortas)
    {   
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->qtdPortas = $qtdPortas;
    }

    public function acelerar(){
        echo 'Acelerando...<br>';
    }

    public function freiar(){
        echo 'Freiando...<br>';
    }

    public function tocarMusica(){
        echo 'Tocar musica...<br>';
    }
}

class Moto{
    public string $modelo;
    public string $cor;
    public string $placa;
    public string $tipoGuidon;

     public function __construct($modelo, $cor, $placa, $tipoGuidon)
    {   
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->tipoGuidon = $tipoGuidon;
    }


    public function acelerar(){
        echo 'Acelerando...<br>';
    }

    public function freiar(){
        echo 'Freiando...<br>';
    }

    public function empinar(){
        echo 'Empinando... <br>';
    }
}


$carro1 = new Carro('Chevrolet', 'Azul', 'QOWEK0', 4);
var_dump($carro1);
echo "<br>";

$carro1->acelerar();
$carro1->freiar();
$carro1->tocarMusica();

$moto = new Moto('ZTX', 'Vermelha', 'AGKSHK0', 'Carbono');
var_dump($moto);
echo "<br>";

$moto->acelerar();
$moto->freiar();
$moto->empinar();