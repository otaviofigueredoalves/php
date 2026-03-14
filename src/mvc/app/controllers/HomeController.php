<?php

class HomeController
{
    public function index()
    {
        require_once __DIR__ . '/../views/home/index.php';
    }
    public function falarNome($nome)
    {
        echo "SEU NOME: $nome ";
    }
}

/**
 * Por que o require_once direto no Controller é ruim? 
 * 
 * Caminhos repetitivos: Você vai escrever __DIR__ . '/../views/' em todos os métodos. Se mudar a pasta, boa sorte alterando 50 arquivos.
 * 
 * Escopo de variáveis: Se você usar extract(), as variáveis ficam limpas e disponíveis apenas naquela View.
 * 
 * Testabilidade: Fica impossível testar o Controller isoladamente se ele estiver dando require e echo o tempo todo.
 */
/*

O Paradigma em resumo:

    Model: Busca o dado (ex: Select * from users).

    Controller: Recebe o dado do Model e diz: "View, tome esse array aqui e se vire para mostrar pro usuário".

    View: É apenas um arquivo com HTML e uns pequenos <?php echo $variavel; ?> nos lugares certos.
/*