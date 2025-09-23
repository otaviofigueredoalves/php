<?php
// Esse projeto é para estudo e não tem fim comercial
// Cada linha do projeto será descrita para acompanhar meu raciocinio e, se de fato, dominei sobre cada parte do projeto. Isso está sendo feito porque levei mais de um dia para fazer o projeto e algumas partes posso acabar esquecendo de como foram feitas.

include __DIR__ . '/pages/back_login.php'; // importação de algumas variáveis que serão úteis para esta página. Coloquei em um arquivo separado para deixar o código mais limpo
include __DIR__ . '/includes/header.php'; // importação de um template de cabeçalho para não repetir código HTML

$erro = null; // essa variável será útil para exibir os erros cometidos pelo usuário, caso eles existam
?>



<main>
    <?php
    if (!empty($_SESSION['user_name'])) { // dentro de um html, checará se JÁ EXISTE uma SESSÃO de usuário aberta
        include __DIR__ . '/pages/login.php'; // se existir, então leva para a página de login para que o usuário entre na aplicação. Isso impede que um usuário que já preencheu o formulário de cadastro volte para a página de cadastro

    } else {
        include __DIR__ . '/pages/cadastro.php'; // se for a primeira vez acessando a página ou a sessão foi deletada, será exibido o cadastro
    }
    ?>
</main>

<p style="color: red">
    <?php
    if (!empty($erro)) {
        echo $erro; // Se não estou enganado, o erro aqui é exibido se acontecer o seguinte. Quando o usuário acessar a página principal (index.php) o erro não será exibido pois a variável está vazioa, ok. Agora, caso enquanto o usuário preenche o formulário, clique em enviar e a condição de sucesso não for satisfeita, como o envio do formulário é para a mesma página (index.php) então a página será processada novamente e a variavel $erro será verdadeira, exibindo assim o erro
    }
    ?>
</p>
<?php
include __DIR__ . '/includes/footer.php'; // importa um template de footer, a fim de não repetir o HTML.
?>