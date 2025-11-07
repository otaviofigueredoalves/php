<?php
/*
class FileLogger // crio a dependência, ou seja, o que será feito
{
    public function log($message){ // vai receber a mensagem que o usuário definiu, no caso, ele vai definir a mensagem no parâmetro da instância
        echo "[LOG]: $message";
    }
}

class UserManager // classe consumidora, responsável por tudo, irá usar a instância/dependencia e também criá-la
{
    public function __construct(private string $message){} // recebe a mensagem

    public function criarLog() // não é necessário adicionar parâmetro neste método pois a mensagem já é definida no instanciamento de UserManager. Mas poderia também instanciar o UserManager sem o parâmetro de mensagem o que eliminaria o construct e passar o parâmetro diretamente pro método criarLog, nesse caso a mensagem seria adicionada na chamada do método
    {
        $log = new FileLogger(); // ACOPLAMENTO FORTE, instancia a dependência FileLogger, agora que está instanciada tenho acesso aos métodos dela
        return $log->log($this->message); // acessa o método log da instância FileLogger e como parâmetro passa a mensagem de log da propriedade privada message
    }

}

$user = new UserManager("Usuário falou 'Hello world' às 21:33"); // instancia a classe 'cabeça', a que terá TODO O TRABALHO de UTILIZAR e também de CRIAR, junto ao texto de log que quero
$user->criarLog(); // simplemente chamo o método, ele já tem um echo dentro dele;


OBS: O exemplo de acoplamento forte está ótimo. Mas não é o que o exercício pedia. Pois, este aí não está gerenciando usuários, ele está agindo como uma única mensagem de log. O objeto não é o log, o objeto deve ser o usuário, e, na criação do usuário, ter a mensagem
*/


class FileLogger
{
    public function log($message)
    {
        echo "[LOG]: $message";
    }
}

class UserManager
{
    private FileLogger $logger;

    public function __construct(){
        $this->logger = new FileLogger();
    }

    // public function __construct(private FileLogger $logger){} -> Isso não serve neste exemplo SEM DI, pois a diferença entre o construct de cima pro de baixo, é que o de baixo define a propriedade e espera receber a INSTÂNCIA JÁ PRONTA, ou seja, o construtor não cria a dependência. Já no construtor do Exemplo 1 (Sem DI), o construtor está dizendo: eu vou acessar a propriedade $this->logger e eu mesmo vou CRIAR (new FileLogger()) a instância que será atribuída a ela."

    public function criarUsuario($nome)
    {   
        $message = "O usuário $nome foi criado<br>";
        $this->logger->log($message);

    }
    
}

$user = new UserManager();

$user->criarUsuario("Userdev@gmail.com");