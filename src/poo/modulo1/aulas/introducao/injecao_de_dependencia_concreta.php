<?php
// Dependencia: classe que depende de outra

class Address
{
    public function __construct(
        public readonly string $address, 
        public readonly int $number
        )
    {
        
    }
}

class User_C
{
    private Address $address; // aqui definimos o tipo Address, pois a classe User depende da INSTÂNCIA de Address
    public function addAddress(Address $address)
    {
        $this->address = $address; // Agora, estamos somente passando a dependencia/instancia, ou seja, apenas inicializando. Então, a dependencia Address define a dependência e a classe User na função addAddress irá INICIALIZA-LA, atuando como um setter que recebe a dependência pronta e atribui ela a uma propriedade interna. O código agora está desacoplado. A classe User NÃO SABE como "construir" um Address, ela sabe apenas COMO usar um Address.
    }

    public function getAddress()
    {
        return $this->address;
    }
}

$user = new User_C(); // Instância de user, que servirá de instância pro Address
$user->addAddress(new Address('Minha rua', 12)); // AQUI! Será a INJEÇÃO da DEPENDÊNCIA, ou seja, injetar Address na classe User, no método addAddress()
var_dump($user->getAddress());

/**
 * 1. SEPARAÇÃO DE RESPONSABILIDADE
 * 
 * - É o "S" do SOLID. Cada classe deve ter apenas um motivo para mudar.
 * - A DI ajuda a separar as responsabilidades. Na classe User sem DI tinha duas responsabilidades: 1. Gerenciar a lógica do usuário e 2. saber como construir um objeto Address. Com a DI a responsabilidade de construir o Address foi movida para fora
 * 
 * 2. FLEXIBILIDADE (DESACOPLAMENTO)
 * - Trocar peças do sistema sem quebrar o resto;
 * - A DI ajuda: no exemplo NotificadorInterface a classe RegistroDeUsuario é super flexível. Ela não está "colada" hard-coded ao EmailNotificador. Você pode injetar um SMSNotificador ou um SlackNotificador amanhã, e a classe RegistroDeUsuario nem sabe da mudança
 * 
 * 
 * Vai ter situações em que você não vai saber qual classe o User irá depender, é aí que entra a inversão de dependências
 */
