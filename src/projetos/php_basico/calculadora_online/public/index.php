<?php
session_start();
include __DIR__ . '/includes/functions.php';
$erro = null;
$sucesso = null;
$num1 = '';
$num2 = '';
$operador_selecionado = $_SESSION['lembrar_operador'] ?? '';

$operadores = [
    'Somar' => '+',
    'Subtrair' => '-',
    'Multiplicar' => '*',
    'Dividir' => '/',
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = $_POST['num1'] ?? '';
    $num2 = $_POST['num2'] ?? '';
    $operador_selecionado = $_POST['operator'] ?? '';

    $_SESSION['lembrar_operador'] = $operador_selecionado;

    $num1 = formatarNumeroBrasileiro($num1);
    $num2 = formatarNumeroBrasileiro($num2);

    if(empty($operador_selecionado)){
        $erro = 'Selecione algum operador';
    } else if (!is_numeric($num1) || !is_numeric($num2)) {
        $erro = 'Os valores devem ser números';
    } else if (!in_array($operador_selecionado, $operadores)) {
        $erro = "Operador inválido!";
    } else {

        switch ($operador_selecionado) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                if($num1 == 0 && $num2 == 0){
                    $erro = 'Não é possível dividir por zero';
                } else {
                    $resultado = $num1 / $num2;
                    break;
                }
        }
        $resultado = (string)$resultado;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora Online</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="num1">Primeiro número</label><br>
            <input type="text" name="num1" id="num1" value="<?= $num1 ?>">
        </div>
        <div>
            <label for="num2">Segundo número</label><br>
            <input type="text" name="num2" id="num2" value="<?= $num2 ?>">
        </div>
        <div class="operadores-container">
            <?php foreach ($operadores as $operador => $simbolo): ?>
                <input type="radio" name="operator" id="op_<?=$operador?>" value="<?= $simbolo ?>"
                    <?php
                    if ($simbolo === $operador_selecionado) {
                        echo 'checked';
                    }
                    ?>>
                <label for="op_<?=$operador?>"><?= $operador ?></label>
            <?php endforeach; ?>
        </div>
        <input type="submit" value="Calcular">
        <div>
            <?php if ($resultado != ''): ?>
                <p style="font-size: 24px"><?= $resultado ?></p>
            <?php endif ?>
        </div>

    </form>
    <div class="<?php
        if($erro){
            echo 'display';
        }
    ?>">
        <?php if ($erro) : ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif ?>
    </div>


</body>

</html>