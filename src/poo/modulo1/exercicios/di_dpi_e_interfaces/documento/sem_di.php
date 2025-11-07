<?php

class HtmlFormatter // primeiro de tudo eu defini a dependencia/instancia, ou seja, o que será feito, a saída, o que irá voltar pro usuário
{
    public function formatarTexto(string $texto){ // defini um método formatar texto, que vai receber o texto lá da classe Document e vai retornar este texto em HTML
        return "<h1>$texto</h1>";
    }
}
class MarkdownFormatter
{
    public function formatarTexto(string $texto){
        return "## $texto";
    }
}

class Document
{
    public function __construct(private string $texto) // A classe Document será instanciada e terá como parâmetro o texto que eu quero que seja formatado
    {}
    public function construirDocumento(string $formato) // Aqui é o método da classe instanciada que utilizo pra definir qual classe será utilizada, nesse caso, eu passo uma string que dependendo de qual for, irá INSTANCIAR uma classe diferente.
    {
        if ($formato == 'html'){
            $formatador = new HtmlFormatter(); // Instancio a dependência aqui, acoplamento forte
            return $formatador->formatarTexto($this->texto); // logo depois eu utilizo ela pra chamar o método desta DEPENDENCIA (A QUE REALIZARÁ A AÇÃO) para FORMATAR o texto (passando o valor da propriedade texto)
        } else if ($formato == 'markdown'){
            $formatador = new MarkdownFormatter();
            return $formatador->formatarTexto($this->texto);
        }
    }
} // O problema aqui é pq o acoplamento forte permite com que a classe Document saiba das outras classe, ou seja, sabe quais outros formatadores existem e como construi-los

$doc = new Document("Hello world"); // Instancio o documento, pois ele é responsável por tudo (inclusive pra passar o texto)
echo $doc->construirDocumento('html'); // Chamo o método que serve pra instanciar as dependencias e através delas chamar o método que realiza a ação. Esse é o padrão de todas as situações SEM DI