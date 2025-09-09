<?php
include './function.php';
$erro = null;
$pass_generate = '';
$key_list = [
    'uppercase' => [
        'codigo' => 'A-Z',
        'item' => ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
    ],
    'lowercase' => [
        'codigo' => 'a-z',
        'item' => ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
    ],
    'numbers' => [
        'codigo' => '0-9',
        'item' => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
    ],
    'symbols' => [
        'codigo' => '!@#$',
        'item' => ['!', '@', '#', '$', '%', '&', '*'],
    ],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key_item = $_POST['key_item'] ?? '';
    $pass_length = $_POST['pass_length'] ?? '';

    if (!empty($key_item) && !empty($pass_length)) {

        if ($pass_length < 8) {
            $erro = 'A senha deve conter no mínimo 8 caracteres';
        } else if (!ctype_digit($pass_length)){
            $erro = 'Insira um valor numérico';
        } else {
            if (in_array('uppercase', $key_item)) {
                $pass_generate .= implode($key_list['uppercase']['item']);
            }
            if (in_array('lowercase', $key_item)) {
                $pass_generate .= implode($key_list['lowercase']['item']);
            }
            if (in_array('numbers', $key_item)) {
                $pass_generate .= implode($key_list['numbers']['item']);
            }
            if (in_array('symbols', $key_item)) {
                $pass_generate .= implode($key_list['symbols']['item']);
            }

            $pass_generate = gerar_senha($pass_generate,$pass_length);
        }

    } else {
        $erro = 'Preencha todos os campos';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senha </title>
</head>

<body>
    <form action="" method="POST">
        <label for="pass_length">Tamanho da senha</label><br>
        <input type="text" name="pass_length" id="pass_length" placeholder="Minimo 8 caracteres"><br>
        <label for="password">Senha</label><br>
        <input type="text" name="password" id="password" value="<?=$pass_generate?>"><br>

        <?php foreach ($key_list as $key => $key_value): ?>
            <label for="key_item"><?= $key_value['codigo'] ?></label>
            <input type="checkbox" name="key_item[]" pattern="[0-9]*" inputmode="numeric" id="<?= $key ?>" value="<?= $key ?>">
        <?php endforeach ?>
        <br>
        <input type="submit" value="Enviar">
        <p style="color: red">
            <?php
            if ($erro) {
                echo $erro;
            }
            ?>
        </p>
    </form>
</body>

</html>