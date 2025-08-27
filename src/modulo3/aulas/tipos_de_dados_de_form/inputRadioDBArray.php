<?php
$erro = null;
$sucesso = null;

$formas_pagamento = [
    [
        'idPayment' => 'credit',
        'namePayment' => 'Cartão de Crédito',
    ],
    [
        'idPayment' => 'debit',
        'namePayment' => 'Cartão de Débito',
    ],
    [
        'idPayment' => 'fuckPaper',
        'namePayment' => 'Boleto',
    ],
    [
        'idPayment' => 'pix',
        'namePayment' => 'PIX',
    ],
];

$formas_pagamento_validate = [
    [
        'idPayment' => 'credit',
        'namePayment' => 'Cartão de Crédito',
    ],
    [
        'idPayment' => 'pix',
        'namePayment' => 'PIX',
    ],
];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['payment_option'])){
        $erro = 'Selecione algum método de pagamento';
    } else {
        $payment = $_POST['payment_option'];

        $is_valid = false;

        foreach($formas_pagamento_validate as $tipoPagamento){
            if($tipoPagamento['idPayment'] === $payment){
                $is_valid = true;
            }
        }

        if($is_valid){
            $sucesso = "Forma de pagamento APROVADA!";
        } else {
            $erro = "Forma de pagamento INVÁLIDA!!";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <h1>Formulário</h1>
    <form action="" method="POST">

        <?php foreach ($formas_pagamento as $pagamento): ?>
            <div>
                <input type="radio" name="payment_option" id="payment_option" value="<?= $pagamento['idPayment'] ?>">
                <label for="payment_option"><?= $pagamento['namePayment'] ?></label>
            </div>
        <?php endforeach ?>

        <input type="submit" value="Enviar">
        <?php if (!empty($erro)): ?>
            <p style="color: red">
                <?= $erro ?>
            </p>
        <?php endif ?>
        <?php if (!empty($sucesso)): ?>
            <p style="color: green">
                <?= $sucesso ?>
            </p>
        <?php endif ?>

    </form>
</body>

</html>