<?php
class P_Animal{
    public function emitirSom(){
        return '...<br>';
    }
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

$animais = [$gato2, $cachorro2 ,$peixe2];

foreach($animais as $animal){
    echo 'O animal '. $animal->nome . ' faz: '. $animal->emitirSom();
}

/**
 * O que nós ganhamos com POLIMORFISMO? Uma palavra: PADRONIZAÇÃO
 * 
 * Permite economizar código, pois todos estes métodos polimorfizados são originados do pai (genérico). Ou seja, os filhos já possuem uma ação padrão herdada do pai, mas caso algum filho queira fazer algo diferente, basta que ele sobreescreva o método do pai com novas ações.
 * 
 * O verdadeiro ganho da padronização é que nos possibilita escrever funções genéricas que podem operar sobre qualquer instância, sem que a função precise saber os detalhes do especialista
 */