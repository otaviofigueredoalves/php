<?php

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

interface MetodoPagamento 
{
    public function pagar(float $valor): bool;
}

class Paypal implements MetodoPagamento
{
    public function pagar(float $valor): bool
    {
        echo 'Pagamento via paypal no valor de R$ '. $valor;
        return true;
    }
}

class CreditCard implements MetodoPagamento
{
    public function pagar(float $valor): bool
    {
        echo 'Pagamento via cartão de crédito no valor de R$ '. $valor;
        return false;
    }
}

$pagamento = new Paypal();
$pagamento->pagar(100);

