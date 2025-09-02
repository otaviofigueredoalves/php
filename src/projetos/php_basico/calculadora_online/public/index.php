<?php
include __DIR__.'/includes/functions.php';
$erro = null;
$sucesso = null;

$operadores = [
    'Somar' => '+',
    'Subtrair' => '-',
    'Multiplicar' => '*',
    'Dividir' => '/',
];
$operadores_validos = [
    'Somar' => '+',
    'Subtrair' => '-',
    'Multiplicar' => '*',
    'Dividir' => '/',
];

$operador_selecionado = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['operator'])) {
        $erro = "Você deve selecionar um operador";
    } else {
        $operador_selecionado = $_POST['operator'];
        $_SESSION['lembrar_operador'] = $operador_selecionado;

        $num1 = htmlspecialchars($_POST['num1']);
        $num2 = htmlspecialchars($_POST['num2']);

        $num1 = trim($num1);
        $num2 = trim($num2);

        $num1 = formatarNumeroBrasileiro($num1);
        $num2 = formatarNumeroBrasileiro($num2);

        var_dump($num1);
        echo "<br>";
        var_dump($num2);

        var_dump($operador_selecionado);

        if(empty($num1) && empty($num2)){
            $erro = 'Preencha os campos com os valores desejados';
        } else if (!in_array($operador_selecionado, $operadores_validos)) {
            $erro = "Operador inválido!";
        } else if(!is_numeric($num1) || !is_numeric($num2)){
            $erro = 'Os valores devem ser numéricos';
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
                    $resultado = $num1 / $num2;
                    break;
                
            }
            
        }
        
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
            <input type="text" name="num1" id="num1" value="<?=$num1?>">
        </div>
        <div>
            <label for="num2">Segundo número</label><br>
            <input type="text" name="num2" id="num2" value="<?=$num2?>">
        </div>
        <div>
            <?php foreach ($operadores as $operador => $simbolo): ?>
                <input type="radio" name="operator" id="operator" value="<?= $simbolo ?>" 
                <?php 
                    if($simbolo === $operador_selecionado){
                        echo 'checked';
                    }
                ?>
                
                >
                <label for="operator"><?= $operador ?></label>
            <?php endforeach; ?>
        </div>
        <input type="submit" value="Calcular">
        <div>
            <?php if (!empty($resultado)): ?>
                <p style="font-size: 24px"><?=$resultado?></p>
            <?php endif ?>
        </div>
        
    </form>
    <div>
        <?php if ($erro) : ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif ?>
    </div>


</body>

</html>