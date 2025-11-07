<?php

class HtmlFormatter // dependência/instância
{
    public function formatarTexto(string $texto){
        return "<h1>$texto</h1>";
    }
}
class MarkdownFormatter // dependência/instância
{
    public function formatarTexto(string $texto){
        return "## $texto";
    }
}

class Document
{

    public function __construct(private HtmlFormatter $dependencia)  // Aqui as coisas mudam. Antes eu precisava colocar o texto e o formatador. Agora, eu guardo a dependência dentro de uma propriedade. Ou seja, se eu guardo a instância HtmlFormatter, quer dizer que estou sempre dependendo da classe HtmlFormatter então não é preciso especificar o tipo de formatação. O problema de separação de responsabilidade foi resolvido, pois agora a classe Document apenas usa a instância pronta, sem se preocupar em cria-la. Obs: ele ainda sabe que tal forma de formatar existe, mas agora não sabe COMO isso é aplicado.
    {}
    public function construirDocumento($texto) // Aqui é onde recebo o texto!
    {
       return $this->dependencia->formatarTexto($texto); // Aqui eu UTILIZO a dependência pra chamar a função de formatar o texto.
    }
} 

$html = new HtmlFormatter(); // 1. crio a instância pro tipo de formatador
$document = new Document($html); // 2. crio a instância pro "cara" que vai INJETAR A DEPENDÊNCIA/INSTÂNCIA para poder utilizá-la
echo $document->construirDocumento("Hello World"); // 3. Agora que a depêndencia foi injetada, tenho acesso aos métodos dela, como eu tenho acesso aos métodos dela eu passo o texto para o método construirDocumento($texto) e, agora que eu utilizei esta função pra acessar o método dentro da classe, eu acesso a dependencia e CHAMO o método formatarTexto passando novamente o $texto como parâmetro

$markdown = new MarkdownFormatter();
$document = new Document($markdown); // aqui vai dá erro, pois apesar da separação de responsabilidades, a classe Document depende EXCLUSIVAMENTE de HtmlFormatter. Isso significa que se amanhã eu quero criar uma classe MarkdownFormatter eu terei que Modificar o Document, o que viola o principio de modificação de classes. Parando pra pensar, a solução SEM_DI aparenta inicialmente até ser mais flexível, já que era só definir o tipo e a formatação ja ocorreria, markdown ou html. Mas, ainda assim a classe Document teria que ser modificada caso eu quisesse uma 3º ou 4º forma de formatar o texto, além de que eu teria que passar um monte de if else E ainda VIOLARIA o principio da responsabilidade única, ou seja, é uma solução beem pior comparado com essa.  
echo $document->construirDocumento("Hello World");