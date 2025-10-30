<?php

/**
 * Classes e métodos abstratos são garantias de que uma classe NÃO será instanciada, pois a classe não retorna nada e servirá como CONTRATO para as classes filhas e de que um MÉTODO abstrato presente no PAI estará OBRIGATORIAENTE presente nos outros filhos. Sem a abstração, é possível definir um método no pai que o filho herdará mas que não é necessário ser sobrescrito. A abstração permite com que este método seja OBRIGATORIAMENTE SOBREESCRITO em todas as classes filhas que herdam o método do pai, mesmo que o método não retorne nada (ainda pode retornar, como abstract int calcularImposto()). OBS: métodos abstratos (no pai) não possuem escopo.
 * 
 * Em resumo:
 * CLASSE ABSTRATA: Não pode ser instanciada. Serve de contrato
 * MÉTODO ABSTRATO: Não tem corpo. Força as classes filhas a implementá-lo
 */
abstract class P_Animal{
    public abstract function emitirSom();
}

class P_Gato extends P_Animal{
    public string $nome = 'Gato';

    public function emitirSom(){
        return 'Miau<br>';
    }
}

class P_Cachorro extends P_Animal{
    public string $nome = 'Cachorro';
    public function emitirSom(){
        return 'Auau<br>';
    }
}
class P_Peixe extends P_Animal{
    public string $nome = 'Peixe';
    public function emitirSom(){
        return '...<br>';
    }
}


$cachorro2 = new P_Cachorro();
$gato2 = new P_Gato();
$peixe2 = new P_Peixe();


function fazerSom($animal){
    echo 'O animal '. $animal->nome . ' faz: '. $animal->emitirSom();
}


fazerSom($cachorro2);
