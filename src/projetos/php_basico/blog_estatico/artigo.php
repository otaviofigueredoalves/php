<?php
include __DIR__ . '/includes/header.php';


if(isset($_GET['post'])){
    $nome_post = $_GET['post'];

    $caminho_arquivo = __DIR__ . '/artigos/' . $nome_post . '.php';

    if(file_exists($caminho_arquivo)){
        include $caminho_arquivo;

        echo "<article>";
        echo "<h2>$titulo</h2>";
        echo "<h3>$data</h3>";
        echo "<p>$conteudo</p>";
        echo "</article>";
    } else {
        echo "<h2>Erro 404, página não encontrada </h2>";
    }
} else {
    header('Location: index.php');
    echo "Nenhum arquivo especificado";
}
?>