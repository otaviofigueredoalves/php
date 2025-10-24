<?php

/**
 * MÉTODOS ESTÁTICOS (STATIC): Pertencem a classe e não dependem de propriedades INSTANCIADAS (pois ainda podem depender de propriedades estáticas). Ou seja, não é necessário instanciar um objeto para conseguir acessá-lo;
 * O caso das constantes é o mesmo, não é necessário instânciar um objeto pra elas pois elas são propriedades DA CLASSE.
 * 
 * SELF: Usado para acessar os métodos ESTÁTICOS no lugar do THIS, pois o THIS se refere a um objeto instanciado, como não temos este objeto instanciado, já que ele não é necessário para acessar os métodos estáticos, então utilizamos SELF::(CONSTANTE OU MÉTODO) para acessar/executar.;
 */


class Calculadora {
    // MÉTODOS ESTÁTICOS E CONSTANTES
    public const VERSION = '1.0.0';
    public const PI = 3.14;

    public static function potencia(int $numero){
        return $numero * $numero;
    }
    public static function areaCirculo(float $raio){
        return self::PI * $raio * $raio;
    }
    // MÉTODOS PARA INSTÂNCIA
    private string $nome;

    public function __construct(string $nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

}

$calc = new Calculadora('Calc Master');
echo $calc->getNome();
echo "<br>";
echo Calculadora::potencia(10);
echo "<br>";
echo Calculadora::areaCirculo(5);