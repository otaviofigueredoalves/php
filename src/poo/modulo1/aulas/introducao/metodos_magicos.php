<?php
class Carro {
    /**
     * Métodos Mágicos em PHP são métodos especiais, com nomes pré-definidos que sempre começam com dois underscores (__), que não são chamados diretamente por você. Em vez disso, eles são executados automaticamente pelo PHP em resposta a determinados eventos ou interações com um objeto.
     *  
     * Pense neles como "gatilhos" ou "interceptadores". Eles permitem que você "intercepte" uma ação padrão do PHP (como criar um objeto, tentar acessar uma propriedade, tratar um objeto como string) e execute um código customizado em seu lugar.
     */

    public string $cor;
    public int $ano;
    public string $modelo;

    // Métodos

    public function acelerar(){
        echo 'Acelerando...';
    }
    public function freiar(){
        echo 'Freiando...';
    }

    // Sem o __construct, na hora de instanciar a classe, o valor das propriedades será INDEFINIDO, o que não é correto. Portanto, é necessário o __construct para que valores sejam atribuídos para as propriedades, dependendo das entradas dos argumentos. Um objeto, para ser útil, precisa nascer em um estado válido e consistente
    public function __construct(string $iCor, string $iModelo, int $iAno)
    {
        $this->cor = $iCor; // o this é necessário para que a função entenda que 'DESTE OBJETO' pegue a $cor;
       //Dentro de um método de uma classe, o $this é uma pseudo-variável especial que sempre se refere ao objeto que foi instanciado. É como se o objeto estivesse falando de si mesmo na primeira pessoa ("eu").
       $this->modelo = $iModelo;
       $this->ano = $iAno;
       echo "Construindo o carro...". $this->modelo . "...<br>";
    }
}
$carro1 = new Carro('vermelho', 'bmw', 2007);
print_r($carro1);


/**
 * Entáo o construct é para evitar valores vazios?
 * 
 * Não só valores vazios, mas garantir que o objeto vai ser criado com um estado válido, de forma que seja possível chamar qualquer método do objeto logo a partir de sua criação, o conceito-chave aqui é garantir que o objeto seja criado sem nenhuma invariante, o que não necessariamente significa prevenir valores vazios, existem casos, embora muito raros, que o objeto funciona mesmo com algumas de suas propriedades vazias (por exemplo se você for aplicar técnicas de cache), por outro lado existem casos onde só garantir que não vai estar vazio também não é suficiente, pensa numa classe NumeroNatural, pelas regras da matemática, ela só pode simbolizar números maiores ou iguais a 0, logo, mesmo que você receba um int no construtor, pode ser que o int seja um -1 por exemplo, o que violaria o encapsulamento desse objeto, pois agora ele está operando com um estado inválido, por isso o construtor seria importante para prevenir esta invariante também, a gente não preveni dados vazios só pois eles deveriam ser preenchidos, mas sim pois eles são invariantes para que o objeto estaja num estado válido.

 */
