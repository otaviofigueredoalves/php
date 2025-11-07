<?php

class FileLogger
{
    public function log($message)
    {
        echo "[LOG]: $message";
    }
}

class UserManager
{

    public function __construct(private FileLogger $logger) // Agora o construtor espera receber a instância pronta
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