<?php
/**
 * Família 1: Usuários
 */
class User
{
    // O PHP magicamente "copia-cola" os métodos da TLoggeer para dentro da classe User
    use TLogger;

    public function __construct(private string $nome)
    {
        $this->log("Um novo usuário foi criado: {$this->nome}");
    }

}