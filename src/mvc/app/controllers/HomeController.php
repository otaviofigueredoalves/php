<?php

class HomeController
{
    public function index()
    {
        echo "Hello from index HomeController! ";
    }
    public function falarNome($nome)
    {
        echo "SEU NOME: $nome ";
    }
}

// Isso viola o princípio de Separação de Preocupações (SoC). Os controladores nunca devem trabalhar com dados diretamente pra view