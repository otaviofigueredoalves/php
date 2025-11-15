<?php
/*
Essa é a peça final do quebra-cabeça da POO em PHP. Você dominou a herança (extends) e os contratos (implements), mas ambos têm limitações.

    extends (Herança): Só pode herdar de um pai.

    implements (Interface): Permite múltiplos contratos, mas não reutiliza código (é 100% abstrata).

O Problema: E se duas classes de famílias totalmente diferentes (ex: User e Produto) precisarem reutilizar o mesmo bloco de código?

    User não pode herdar de Produto.

    Uma interface não pode lhes dar o código pronto.

A solução para isso são as Traits.


-> EXTENDS: Relação É UM (identidade)
-> IMPLEMENTS: Relação É CAPAZ DE FAZER (contrato)
-> USE: Relação USA ESTE COMPORTAMENTO (reutilização)

*/

// Forma antiga de construir um autoloader
function autoLoader($className)
{
    $diretorios = ['classes/','traits/'];
    
    foreach($diretorios as $diretorio){
        $diretorio = strtolower($diretorio);
        $className = strtolower($className);
        if(file_exists($diretorio . $className . '.class.php')){
            include_once($diretorio . $className . '.class.php');
            break;
        }
    }
}

spl_autoload_register('autoLoader');


$user = new User('Otavio');
$produto = new Produto('SKU-12345');

