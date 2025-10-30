<?php

/**
 * Podemos usaro ::parent para chamar a versão original do método herdado.
 */
abstract class P1_Animal{
    public abstract function emitirSom();
}

class P1_Gato extends P1_Animal{
    public string $nome = 'Gato';

    public function emitirSom(){
        return 'Miau<br>';
    }
}

class P1_Cachorro extends P1_Animal{
    public string $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function emitirSom(){
        return 'Auau<br>';
    }
}

class FilaBrasileiro extends P1_Cachorro
{
    public $idade = 6;
    public function emitirSom(){
        if ($this->idade  < 6){
            return parent::emitirSom() ;
        }else {
            return 'Ruf ruf';
        }
    }

}

class P1_Peixe extends P1_Animal{
    public string $nome = 'Peixe';
    public function emitirSom(){
        return '...<br>';
    }
}

function fazerSom($animal){
    echo 'O animal '. $animal->nome . ' faz: '. $animal->emitirSom();
}

$fila = new FilaBrasileiro('Zeus');

fazerSom($fila);
