<?php
/**
 * Recapitulando. Encapsulamento: proteger a propriedade de código externo, ou melhor dizendo, definir o nível de acesso a uma propriedade, encapsula-la para que seja acessada em determinado nivel/grau de acesso. Getter: métodos que buscam dados encapsulados; Setters: métodos que setam novos dados ou substituem dados encapsulados
 * 
 * Encapsulamento: Exatamente. É o pilar que nos permite agrupar dados (propriedades) e comportamentos (métodos) em um objeto, protegendo esses dados ao definir níveis de acesso (public, protected, private). O objetivo é controlar quem pode ver e quem pode modificar o estado interno do objeto.

* Getters (Acessores): Perfeito. São métodos públicos cuja única responsabilidade é ler e retornar o valor de uma propriedade privada ou protegida. Eles atuam como uma "janela de leitura" segura para o mundo exterior. Ex: getNome(), getSaldo().
*
* Setters (Modificadores): Perfeito. São métodos públicos cuja responsabilidade é alterar ou definir o valor de uma propriedade privada or protegida. Eles são cruciais porque atuam como um "portal de escrita", permitindo que você adicione lógica de validação antes de modificar o dado, garantindo que o objeto nunca entre em um estado inválido. Ex: setNome(string $novoNome)

* CONSTRUTORES: irão definir as propriedades do meu objeto, ou seja, primeiro eu declaro as propriedades (digo quais serão) e depois eu CONSTRUO elas, pra que seja possível trabalhar com elas
 */
/*
1. O __destruct() NÃO é o que destrói o objeto

Essa é a confusão mais comum. O __destruct() não destrói o objeto.

Ele é um método que o PHP executa automaticamente um instante antes de o objeto ser destruído. Pense nele como uma "notificação de despejo": o PHP avisa "Estou prestes a destruir este objeto, você quer fazer alguma coisa antes que eu o faça?"

A destruição em si é feita pelo motor do PHP (o Garbage Collector) quando o objeto não tem mais nenhuma referência.

2. O __destruct() NÃO é uma alternativa ao unset()

Na verdade, unset() é um dos gatilhos que causam a chamada do __destruct().

Sua definição diz: "...em vez de precisar ficar chamando um método que dá unset...". Na realidade, acontece o oposto:

    Você chama unset($minhaInstancia).

    O PHP vê que o objeto $minhaInstancia perdeu sua referência.

    O PHP decide "Ok, hora de destruir este objeto".

    Imediatamente antes de liberar a memória, o PHP procura e executa o método __destruct() daquele objeto.

3. O __destruct() NÃO é para "limpar propriedades"

Sua definição diz: "...define uma propriedade com um valor vazio...".

Isso não é necessário. Quando o PHP destrói um objeto, toda a memória que ele usava é liberada, incluindo todas as suas propriedades. Você não precisa limpá-las manualmente.

Então, para que ele serve de verdade?

O verdadeiro propósito do __destruct() é liberar recursos externos que o objeto possa estar "segurando".

Memória (propriedades, variáveis) o PHP limpa sozinho. O que ele não faz sozinho é, por exemplo:

    Fechar um arquivo: Se o seu objeto abriu um arquivo (fopen) no __construct(), o __destruct() é o lugar perfeito para garantir que ele seja fechado (fclose).

    Fechar uma conexão de rede: Se o objeto abriu uma conexão com um banco de dados, o destrutor pode fechá-la.

    Salvar um log final: Você pode usar o destrutor para escrever "Objeto 'Logger' está sendo encerrado" em um arquivo de log.

    Confirmar uma transação (commit): Em um processo complexo, o destrutor pode ser a última chance de confirmar mudanças em um banco de dados.


    RESUMO: O __destruct() NÃO DESTRÓI O OBJETO, ele é apenas um suporte que o PHP chama automaticamente para você logo antes da destruição, permitindo com o que o desenvolvedor feche conexões externas ou coloque uma mensagem de log.
*/


class Conexao{
    private string $conexao;

    public function __construct()
    {
        $this->conexao = "Conectando com o banco de dados<br>";
    }

    public function __destruct()
    {
        $this->conexao = '';
        echo 'Conexão encerrada';
    }

    public function consulta(){
        if($this->conexao){
            echo "Realizar uma consulta no banco de dados<br>";
        }
    }
}

$conexaoDB = new Conexao();
$conexaoDB->consulta();