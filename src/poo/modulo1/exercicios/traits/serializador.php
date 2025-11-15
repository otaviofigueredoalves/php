<?php

trait Logger
{
    public function log(string $message)
    {
        $classe = get_class($this);
        $hora = $this->getTimeZone();
        echo "[LOG] - {$classe} @ {$hora}: $message";
    }

    public function getTimeZone()
    {
        $time_stamp = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $hora = $time_stamp->format('d/m/Y H:i:s');
        return $hora;
    }
}

trait SerializavelEmJSON
{
    public function toJson()
    {
        return json_encode($this, JSON_UNESCAPED_UNICODE); // JSON_ENCODE serve pra transformara as propriedades da classe em JSON, o segundo parâmetro é para armazenar caracteres especiais, ou seja, se um usuário se cadastrar como 'João', o 'João' será salvo exatamente assim;
    }
}

class Usuario_N implements JsonSerializable // Só a trait do SerializavelEmJson não basta, pois as propriedades abaixo estão privadas então o método json_encode não tem acesso, por isso nós implementamos o JsonSerializable para que a classe acesse o
{
    use SerializavelEmJSON;
    use Logger;

    public function __construct(private string $nome, private string $email)
    {}

    public function criarUsuario()
    {
        $this->log("Insert into DB user {$this->nome} | Email: {$this->email}");
    }

    /**
     * Método exigido pela interface nativa JsonSerializable
     * Quando você chama json_encode($this), o PHP executa este método automaticamente para saber quais dados usar
     */
    public function jsonSerialize(): mixed
    {
        // Como estamos na classe das propriedades que queremos transformar em json o método jsonSerialize consegue acessar as variáveis privadas e enviar pro toJson();
        return [
            'nome_do_usuario' => $this->nome,
            'email' => $this->email
        ];
    }
}
class Produto_N implements JsonSerializable
{
    use SerializavelEmJSON;
    use Logger;

    public function __construct(private string $nome, private int $preco)
    {}

    public function criarProduto()
    {
        $this->log("Product {$this->nome} | Price: {$this->preco}");
    }

    public function jsonSerialize(): mixed
    {
        return [
            'nome_do_produto' => $this->nome,
            'preco' => $this->preco
        ];
    }
}

$new_user = new Usuario_N("Anônimo", "anônimo@gmail.com");
$new_user->criarUsuario(); 
echo "<br>";
echo "Usuário em Json: <br>". $new_user->toJson(). "<br>";
echo "<hr>";
$new_product = new Produto_N("XBOX", 2000);
$new_product->criarProduto(); 
echo "<br>";
echo "Produto em Json: <br>". $new_product->toJson();
echo "<hr>";