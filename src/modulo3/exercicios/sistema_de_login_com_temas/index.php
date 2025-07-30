<?php
include './login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Login</title>
</head>
<body class="<?=$cookieTheme?>">
    <section class="container-box">
        <div class="container-content">
            <form action="" method="POST" class="content">
                <div class="title">
                    <h1>LOGIN</h1>
                </div>
                <div class="form-item">
                    <label for="login">Usuario: </label>
                    <div class="input"><input type="text" name="login"></div>
                </div>

                <div class="form-item">
                    <label for="password">Senha: </label>
                    <div class="input"><input type="password" name="password"></div>
                </div>

                <div class="form-item">
                    <label for="lembrar">Tema preferido: </label>
                    <div class="select" value="lembrar">
                        <select name="tema" id="theme">
                            <option value="black">Escuro</option>
                            <option value="light">Claro</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Login" class="btn">
                    <?php 
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            echo $msg;
                        }
                        
                    ?>
            </form>
        </div>
    </section>
</body>
</html>