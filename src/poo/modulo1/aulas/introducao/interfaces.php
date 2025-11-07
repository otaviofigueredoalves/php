<?php
include 'interfaces_ex_functions.php';
/**
 * Uma Interface é um CONTRATO que pode ser assinado por VÁRIAS CLASSES. Ou seja, ele quebra a limitação do abstract que só pode impor regras aos filhos do pai. A interface é 100% abstrata, não dando nada de herança, ou seja, não há filhos pra herdar, apenas classes que assinam contratos pois querem fazer tal coisa.
 * 
 * ABSTRACT: quando a relação é de 'É UM (IS-A)'. Ex: Cachorro É UM Animal, e você quer reutilizar código como 'respirar()';
 * INTERFACE: quando você tem classes diferentes que precisam 'FAZER (CAN-DO). Ex: Cachorro e Drone SÃO CAPAZES DE 'SeMover()';
 * 
 * CLASSE ABSTRATA:
 * - Pai que dá herança (propriedades, métodos já prontos) e também impõe regras (méetodos abstratos);
 * - Ela é uma mistura de código reutilizável e um contrato.
 * - DESVANTAGEM: Uma classe só pode ter um Pai (extends só funciona uma vez)
 * 
 * INTERFACE (CONTRATO PURO):
 * - É apenas um "Contrato" com regras;
 * - Não dá nada de herança (zero propriedades, zero métodos prontos). Ela é 100% abstrata;
 * - VANTAGEM: Uma classe pode "assinar" vários contratos (implements);
 * - Detalhe: você não compartilha O MÉTODO, você compartilha O CONTRATO, pois o método é abstrato, ou seja, não existe dentro de uma INTERFACE, ele é apenas uma ASSINATURA
 * 
 * ## ENTÃO:
 * 
 * "Então eu uso as interfaces quando quero que classes de famílias diferentes sigam o mesmo CONTRATO (assinatura de método)."
 * 
 * E eu uso as classes abstratas quando quero que classes da mesma família reutilizem CÓDIGO PRONTO (métodos concretos) E/OU sigam um CONTRATO interno (métodos abstratos)."
 */


### RECAPITULAÇÃO:
// Recapitulando. Injeção de dependência resolve o problema de separação de responsabilidade, onde uma classe era responsável não só por usar a instância de outra classe, mas também criar esta instância, agora a instância é criada fora do código pelo método que a classe instanciada chama/construtor. Já na inversão de depedencias, além de ter a separação de responsabilidade aumentamos também o nível de abstração, removendo a limitação de uma instância a uma Classe concreta, ou seja, se eu tiver um método criar da classe Pedra, eu só poderia jogar Pedra e o que o método/construtor receberia como parâmetro seria APENAS o tipo Pedra. A inversão de dependência permite com que o tipo recebido pelo método construtor da classe seja uma Interface/Abstração, podendo instanciar qualquer classe que tenha assinado o contrato. Assim, garantindo maior flexibilidade, o método construtor ou um método setter comum se preocupa apenas em inicializar a instância que possui o contrato, em vez de instanciar apenas a classe que possui um determinado método

interface MetodoPagamento 
{
    public function pagar(float $valor): bool;
    public function getName();
}

class Paypal implements MetodoPagamento
{
    public function pagar(float $valor): bool
    {
        echo 'Pagamento via paypal no valor de R$ '. $valor;
        return true;
    }
    public function getName()
    {
        return get_class($this);
    }
}

class CreditCard implements MetodoPagamento
{
    public function pagar(float $valor): bool
    {
        echo '<br>Pagamento via cartão de crédito no valor de R$ '. $valor;
        return false;
    }

    public function getName()
    {
        return get_class($this);
    }
}

processarPagamento(new CreditCard, 100);


