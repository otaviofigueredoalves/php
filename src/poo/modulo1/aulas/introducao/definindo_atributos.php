<?php
class Carro {
    // Atributos e métodos

    public string $cor;
    public int $ano;
    public string $modelo;
}

// var_dump(Carro); -> não funciona, pois toda a classe precisa ser instanciada (construída)

$carro1 = new Carro;
$carro1->cor = 'Azul';
$carro1->ano = 2025;
$carro1->modelo = 'ABCD';
$carro2 = new Carro;
$carro2->cor = 'Vermelho';
$carro2->ano = 2024;
$carro2->modelo = 'sf masmsk  ';
// $carro1->cavalo = 'muitos'; propriedade dinâmica, característico do php mas pode causar bugs
print_r($carro1);
print_r($carro2);