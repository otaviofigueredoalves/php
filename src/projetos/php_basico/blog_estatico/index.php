<?php
include __DIR__ . '/includes/header.php';
$caminhos_artigos = __DIR__ . '/artigos';

$arquivos = scandir($caminhos_artigos); // ler todos os arquivos do diretório;
// var_dump($arquivos);
?>
<main>
    <h2>Últimos artigos</h2>
    <ul>
        <?php foreach($arquivos as $arquivo): ?>
        <?php
            if($arquivo != '.' && $arquivo != '..' && pathinfo($arquivo, PATHINFO_EXTENSION) === 'php'){ // pathinfo verifica se o arquivo tem a extensão .php, se tiver, a função retorna 'php'
                $nome_post = basename($arquivo,'.php'); // remove extensão php pra usar na URL

                echo "<li><a href='artigo.php?post={$nome_post}'>{$nome_post}</a></li>";
                
            }
        ?>
        <?php endforeach ?>
    </ul>
</main>
<?php
include __DIR__ . '/includes/footer.php';
?>