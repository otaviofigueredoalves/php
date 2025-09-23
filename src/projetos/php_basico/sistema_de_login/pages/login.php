<?php
include __DIR__ . '/back_login.php'; // importa variáveis úteis

if($_SERVER['REQUEST_METHOD'] === 'POST'){ //  só verifica se um formulário for enviado

    if (!empty($user_login) && !empty($user_pass)) { // se o usuário preencher todos os campos, então execute o código
    
        $user_account = fopen($path_logins . $_SESSION['user_email'] . ".txt", "r"); // aqui será criado o arquivo do usuário em forma de sistema de arquivo, simulando um cadastro que iria pro banco de dados, $path_logins possui o caminho absoluto para a pasta onde será armazenada as informações, a sessão 'user_email' servirá como parte do nome do arquivo, '.txt' é para finalizar a criação do arquivo txt e 'r' para que o arquivo seja apenas LIDO
        $account_email = trim(fgets($user_account)); // remove os espaços vazios, não lembro bem porque precisa remover

        // var_dump($account_email);
        $account_password = trim(fgets($user_account)); // também não lembro bem porque precisa remover os espaços vazios
        // var_dump($account_password);

        fclose($user_account); // fecha o arquivo, aliviando a carga do garbage collector
        

        if ($account_email == $user_login && password_verify($user_pass, $account_password)) { // se a senha de login não corresponder com a de cadastro, um erro é gerado
            header('Location: ./pages/welcome.php'); // se tiver tudo ok, manda pra página logada
            exit();
        } else {
            $erro = 'Usuário ou senha inválidos';
        }
    } else {
        $erro = 'Preencha todos os campos'; 
    }
}

?>
<h1>LOGIN</h1>
<form action="" method="POST">
    <div>
        <label for="user_email">Email</label>
        <input type="text" name="user_email_login" id="user_email_login">
    </div>
    <div>
        <label for="user_password">Senha</label>
        <input type="text" name="user_password_login" id="user_password_login">
    </div>
    <input type="submit" value="Enviar">
</form>