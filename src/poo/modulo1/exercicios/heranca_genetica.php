<?php


class Animal{
    private string $nome;
    private string $especie;

    public function __construct($nome, $especie)
    {
        $this->nome = $nome;
        $this->especie = $especie;
    }

    public function respirar()
    {
        echo 'Respirando';
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie){
        return $this->especie = $especie;
    }
}

class Mamifero extends Animal{
    private int $qtdMamas;

    public function __construct($qtdMamas, $nome, $especie)
    {
        parent::__construct($nome, $especie);
        $this->qtdMamas = $qtdMamas;
    }

    public function getQtdMamas()
    {
        return $this->qtdMamas;
    }
}

class Aves extends Animal{
    private int $qtdPenas;

    public function __construct($qtdPenas, $nome, $especie)
    {
        parent::__construct($nome, $especie);
        $this->qtdPenas = $qtdPenas;
    }

    public function getQtdPenas(){
        return $this->qtdPenas;
    }

    public function botarOvos(){
        echo 'Botando ovos...';
    }
}

class Cachorro extends Mamifero{
    // NOTAS: Aqui não é necessário nenhum construct ou parent::__construct pois não há responsabilidade adicional para esta classe. Ou seja, a classe cachorro possui APENAS as MESMAS propriedades da classe Mamifero, como são as mesmas propriedades da classe Mamífero, onde elas já foram declaradas e inicializadas não é mais necessário o construtor nesta classe. Seria necessário SE a classe CACHORRO possuísse uma propriedade própria dela, aí seria necessário dividir a responsabilidade, delegando as propriedades que originam de mamífero a ele e as propriedades de cachorro ao objeto Cachorro.

    // public function __construct($qtdMamas, $nome, $especie)
    // {
    //     parent::__construct($qtdMamas, $nome, $especie);
    // }

    public function abanarRabo(){
        echo 'Abanar o rabo...';
    }

    public function latir(){
        echo 'Latindo...';
    }
}

class Gato extends Mamifero{
    public function __construct($qtdMamas, $nome, $especie)
    {
        parent::__construct($qtdMamas, $nome, $especie);
    }

    public function miar(){
        echo 'Miar...';
    }
}

class Passaro extends Aves{
    public function __construct($qtdPenas, $nome, $especie)
    {
        parent::__construct($qtdPenas, $nome, $especie);
    }
}


$cachorro = new Cachorro(4, 'Zeus', 'Pastor Alemão');
$ave = new Passaro(10000, 'Pica-pau', "Pica-paulinus Voadorius");
print_r($cachorro);
echo "<br>";
echo $cachorro->getEspecie();
echo "<br>";
$cachorro->latir();
echo "<br>";
echo $ave->getNome();
echo "<br>";
echo $ave->setNome('Beija-flor');