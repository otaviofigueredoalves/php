<?php
class Celular {
    public string $modelo;
    public string $sistema;
    public array $numeros = [];
    public string $camera;
     

    public function ligar(){
        echo 'Ligando o celular';
    }
    public function desligar(){
        echo 'Desligando';
    }
    public function discar($check){
        if($check){
            return "<br>Ligando :)</br>";
        } else {
            return "<br>Melhor não :/</br>";
        }
    }
}

$motoe7 = new Celular;
$motoe7->modelo = 'Moto E7';
$motoe7->sistema = 'Android 11';
$motoe7->numeros = [
    '40028922' => 'gosto',
    '1010101010' => 'nao gosto',
    '2920300202' => 'gosto',
];

foreach($motoe7->numeros as $numero => $status){
    if($status == 'nao gosto'){
        echo "É o número $numero... ". $motoe7->discar(false);
    } else {
        echo "É o número $numero... ". $motoe7->discar(true);
    }
}