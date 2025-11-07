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

class User_D
{
    private Address $address; // aqui definimos o tipo Address, pois a classe User depende da INSTÂNCIA de Address
    public function addAddress(string $address, int $number)
    {
        $this->address = new Address($address, $number); // Instanciando a classe Address dentro de User. Pois User depende de Address. Este jeito não é muito recomendável, pois é considerado hard-coded (acoplamento forte). Temos que dar um jeito de passar pro addAddress a instância do Address, não instanciar dentro do método addAddress. Esta classe user não só usa um Address, como também é responsável por saber como construir um Address. Se amanhã a classe Address mudar seu construtor (exigindo um CEP, por exemplo), você teria que quebrar e editar a classe Uer para corrigir. Violando assim o Princípio da Responsabilidade Única.
    }

    public function getAddress()
    {
        return $this->address;
    }
}

$user = new User_D(); // Instância de user, que servirá de instância pro Address
$user->addAddress("Minha rua", 12);
var_dump($user->getAddress());