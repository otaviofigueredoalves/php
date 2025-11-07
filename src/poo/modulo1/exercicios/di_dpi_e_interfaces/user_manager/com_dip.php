<?php

interface InterfaceLogger
{
    public function log(string $message);

}

class FileLogger implements InterfaceLogger
{
    public function log(string $message)
    {
        echo "[LOG]: $message";
    }
}
class DBLogger implements InterfaceLogger
{
    public function log(string $message)
    {
        echo "[INSERT INTO DB]: $message";
    }
}

class UserManager
{

    public function __construct(private InterfaceLogger $logger) // Agora o construtor espera receber QUALQUER instância que implementou o contrato/interface 'InterfaceLogger', desacoplando a classe consumidora da dependência (não é mais tão dependente assim)
    {}

    public function criarUsuario($nome)
    {   
        $message = "O usuário $nome foi criado<br>";
        $this->logger->log($message);

    }
    
}
$fileLogger = new FileLogger(); // instanciamos a dependencia no código externo
$user = new UserManager($fileLogger); // injetamos a dependência no parâmetro da instância da classe consumidora
$user->criarUsuario("Userdev@gmail.com");
echo "<hr>";
$dbLogger = new DBLogger();
$user2 = new UserManager($dbLogger);
$user2->criarUsuario("14/06/2006");