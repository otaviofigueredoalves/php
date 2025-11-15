<?php
/**
     * A TRAIT (comportamento reutilizável)
     * 
     * Isto não é um "pai" e não é um "contrato"
     * É apenas um "pacote" de métodos prontos
     * A letra 'T' no nome é uma convenção comum, TLogger, mas não é obrigatória
     */
trait TLogger
{
    public function log(string $message): void
    {
        $classe = get_class($this);
        echo "[LOG - {$classe}]: {$message}<br>";
    }

    public function logGenerico(): void
    {
        $this->log("Uma ação genérica foi executada");
    }
}