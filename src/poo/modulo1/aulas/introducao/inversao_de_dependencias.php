<?php


// A interface é necessária para que quebre a limitação de uma classe depender de uma classe concreta e passar a depender de abstração. Nesse caso, permitir com que o método jogar jogue mais coisas.

interface jogarInterface
{
    public function jogar();
}

class Pedra implements jogarInterface
{
    public function jogar()
    {
        return 'jogar pedra';
    }
}
class Abajur implements jogarInterface
{
    public function jogar()
    {
        return 'jogar abajur';
    }
}

class Person
{

    public function jogar(jogarInterface $coisa) 
    {
        var_dump($coisa->jogar());
    }
}

$person = new Person();
$person->jogar(new Abajur);