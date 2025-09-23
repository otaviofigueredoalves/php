<?php
include __DIR__ . '/back_login.php';
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$token = $_SESSION['csrf_token'] ?? null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die('Erro de validação CSRF: Ação bloqueada.');
    }


    if (empty($_SESSION['user_name'])) { // acho que não precisava colocar essa condição, já que já tem verificações no index.php para evitar com que eu acesse esta página de cadastro
        if (empty($user_email) && empty($user_password)) {
            $erro = 'Preencha todos os campos';
            // echo 'AQUI DENTO!'; depuração
        } else {

            if ($email_verify === false || empty($user_password)) { // se a verificação de email retornar false ou a senha for vazioa, guarde o erro
                $erro = 'Email ou senha inválida';
            } else {

                $login = htmlspecialchars($_POST['user_email']); // proteção  contra XSS
                $password_hash = password_hash($user_password, PASSWORD_DEFAULT);

                $_SESSION['user_email'] = $login; // guarda email

                $new_login = fopen($path_logins . $_SESSION['user_email'] . '.txt', "a"); // permite com que um novo arquivo seja alterado da forma como quiser. Aqui está definido o caminho, nome do arquivo, extensão do arquivo e 'append', podendo ser lido e escrito.
                if ($new_login) { // se o arquivo existir
                    fwrite($new_login, $_SESSION['user_email'] . "\n"); //escreva no arquivo o email e quebre uma linha
                    fwrite($new_login, $password_hash . "\n"); // escreva no arquivo a senha e quebre uma linha
                    fclose($new_login); // feche o arquivo
                    $_SESSION['user_name'] = $_POST['user_name']; // guarda nome
                    header('Location: ./index.php'); // mande de volta para o index.php para que ele possa processar novamente e mandar para a página de login. Olha aí que beleza, nem precisa de front-end
                    exit();
                }

                // echo 'ok'; depuração
            }
        }
    }
}
?>
<h1>CADASTRO</h1>
<form action="" method="POST">
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($token) ?>">
    <div>
        <label for="user_name">Nome</label>
        <input type="text" name="user_name" id="user_name">
    </div>
    <div>
        <label for="user_email">Email</label>
        <input type="text" name="user_email" id="user_email">
    </div>
    <div>
        <label for="user_password">Senha</label>
        <input type="text" name="user_password" id="user_password">
    </div>
    <input type="submit" value="Enviar">
</form>