<?php
/**
 * INTERFACES COM INJEÇÃO DE DEPENDÊNCIAS
 * 
 * 1. INTERFACE: É o "O QUE" fazer (NotificadorInterface com um método enviar());
 * 2. INJEÇÃO DE DEPENDÊNCIAS (DI): É o "COMO". Em vez de uma classe criar suas próprias ferramentas (dependências/instâncias), ela as recebe prontas (geralmente pelo construtor);
 * 3. A mágica: a classe não pede uma ferramenta concreta (ex: EmailNotificador). Ela pede qualquer ferramenta que siga o contrato (Ex: NotificadorInterface)
 * 
 * Este é o conceito de "Depender de Abstrações (interfaces), não de implementações (Classes Concretas). É o "D" do S.O.L.I.D;
 */



/**
 * O CONTRATO (interface)
 * Aqui é onde será definido O QUE uma classe que assina este contrato deve fazer
 * COMO ela o implementa, não interessa
 */
interface NotificadorInterface
{
    public function enviar(string $destinatario, string $mensagem): void;
}

/**
 * Classes ESPECIALISTAS que ASSINAM o CONTRATO
 */

class EmailNotificador implements NotificadorInterface
{
    public function enviar(string $destinatario, string $mensagem): void 
    {
        echo "========================================<br>";
        echo "Enviando E-MAIL para: {$destinatario}<br>";
        echo "Mensagem: {$mensagem}<br>";
        echo "========================================<br>";
    }
}
class SMSNotificador implements NotificadorInterface
{
    public function enviar(string $destinatario, string $mensagem): void 
    {
        echo "========================================<br>";
        echo "Enviando SMS para: {$destinatario}<br>";
        echo "Mensagem: {$mensagem}<br>";
        echo "========================================<br>";
    }
}
class SlackNotificador implements NotificadorInterface
{
    public function enviar(string $destinatario, string $mensagem): void 
    {
        echo "========================================<br>";
        echo "Enviando mensagem via slack para o canal: {$destinatario}<br>";
        echo "Mensagem: {$mensagem}<br>";
        echo "========================================<br>";
    }
}

/**
 * CLASSE CONSUMIDORA
 * A Que receberá a injeção de dependência, ou seja, injeção de instâncias distintas
 * A classe NÃO SABE se vai enviar EMAIL ou SMS, só sabe que vai usar um objeto (instância injetada) que cumpre o contrato
 */

class RegistroDeUsuario
{
    // Armazenando a dependência do tipo INTERFACE, não uma classe concreta
    private NotificadorInterface $notificador; // defino que a classe DEPENDE de uma abstração

    /**
     * INJETANDO DEPENDÊNCIA
     * Em vez de criar um new EmailNotificador() dentro da classe, nós o RECEBEMOS pelo construtor
     */

    public function __construct(NotificadorInterface $notificador)
    {
        $this->notificador = $notificador;
    }

    public function registrar(string $email, string $telefone)
    {

        // Usando dependência injetada para notificar
        // A classe não se importa COMO vai enviar, apenas chama o método do contrato.

        if($email){
             echo "Salvando usuário com e-mail $email no banco...<br>";
            $this->notificador->enviar($email, "Bem-vindo ao sistema!");
        } else {
             echo "Salvando usuário com SMS $telefone no banco...<br>";
            $this->notificador->enviar($telefone, "Bem-vindo ao sistema!");
        }
    }
}

// Criando a dependência
$notificadorEmail = new EmailNotificador();
$notificadorSMS = new SMSNotificador();
$notificadorSlack = new SlackNotificador();

// Injetando o especialista no construtor da classe consumidora
$registro = new RegistroDeUsuario($notificadorEmail);
$registroSMS = new RegistroDeUsuario($notificadorSMS);
$registroSLACK = new RegistroDeUsuario($notificadorSlack);

// Executando a lógica
$registro->registrar("otavio.dev@gmail.com","9999-111");
$registroSMS->registrar("","9999-111");
$registroSLACK->registrar("009","Hello World!");

/**
 *  Nesse caso do RegistroDeUsuario hard-coded, toda vez eu teria que ir no código e alterar a dependencia dele, toda vez que eu quisesse utilizar uma classe diferente. É exatamente esse o pesadelo de manutenção que a injeção de dependência resolve.
 * 
 * Se o chefe falasse "A partir de amanhã todos os registros devem ser notificados por SMS, não por email, você teria que:
 * 1. Abrir o arquivo RegistroDeUsuario.php
 * 2. Alterar o o código da classe para private SMSNotificador $notificador;
 * 3. Alterar o código do construtor para $this->notificador = new SMSNotificador();
 * 
 * Isso é uma violação do Princípio do Aberto/Fechado ("O" de SOLID), uma classe deve "estar aberta para extensão, mas fechada para modificação;
 * 
 * A injeção de dependência permite que a classe seja imutavel e você simplesmente passa a instância (dependencia) para ela em arquivo X; 
 */