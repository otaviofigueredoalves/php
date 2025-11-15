<?php

/**
 * Família 2: Produtos
 */
class Produto
{
    use TLogger;

    public function __construct(private string $sku)
    {
        $this->log("Novo produto no estoque: {$this->sku}");
    }

    public function atualizarEstoque(int $qtde): void
    {
        $this->log("Estoque do {$this->sku} atualizado para {$qtde}.");
    }
}
