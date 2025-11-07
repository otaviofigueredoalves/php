<?php

interface Formatter{ // Aqui será o contrato, todos as classes que implementarem essa abstração deverão seguir as regras do contratos, nesse caso, todas as classes que assinaram o contrato devem adotar o método formatarTexto E SÃO OBRIGADAS a modificarem o método
    public function formatarTexto(string $texto) : string;
}

class HtmlFormatter implements Formatter // ainda é a "dependencia" (o objeto que está sendo injetado). Porém, agora a classe Document depende em seu código. Ela não depende mais da classe HtmlFormatter; ela depende da interface 'Formatter'.
{
    public function formatarTexto(string $texto) :string{
        return "<h1>$texto</h1>";
    }
}
class MarkdownFormatter implements Formatter 
{
    public function formatarTexto(string $texto) : string{
        return "## $texto";
    }
}

class Document
{

    public function __construct(private Formatter $dependencia){} // Aqui está a grande mudança, em vez de esperar uma instância do tipo 'HtmlFormatter', que limitava o uso da instância à UMA ÚNICA CLASSE, agora QUALQUER CLASSE QUE 'ASSINOU O CONTRATO' Formatter consegue ser usada aqui. Ou seja, o benefício da separação de responsabilidade e da flexibilidade, pois agora a classe Document não tem a menor ideia de que existe a classe MarkdownFormatter ou a classe HtmlFormatter, se preocupando apenas se a dependência injetada implementou o contrato 'Formatter' 

    public function construirDocumento($texto) // Aqui é onde recebo o texto!
    {
       return $this->dependencia->formatarTexto($texto); // Aqui eu UTILIZO a dependência pra chamar a função de formatar o texto.
    }
} 

$html = new HtmlFormatter();
$document = new Document($html); 
echo $document->construirDocumento("Hello World!");

$markdown = new MarkdownFormatter();
$document = new Document($markdown); 
echo $document->construirDocumento("Hello World!"); 