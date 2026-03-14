<?php

class NoticiasController
{
    public function index()
    {
        require_once __DIR__ . '/../views/noticias/index.php';
    }
    public function falarNome($nome)
    {
        echo "SEU NOME: $nome ";
    }
}
