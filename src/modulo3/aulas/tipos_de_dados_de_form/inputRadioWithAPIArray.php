<?php
$erro = null;
$sucesso = null;

$formas_pagamento = [
    'Cartão de crédito' => 'credit',
    'Cartão de débito' => 'debit',
    'Boleto' => 'fuckPaper',
    'PIX' => 'pix',
];

$formas_pagamento_validate = [
    'Cartão de crédito' => 'credit',
    'PIX' => 'pix',
];

// var_dump($formas_pagamento);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['payment_option'])){
        $erro = 'Selecione um método de pagamento';
    } else {
        $is_valid = false;  
        $payment = $_POST['payment_option'];
        // var_dump($payment);
        // var_dump($formas_pagamento_validate);
        
        foreach($formas_pagamento_validate as $opcaoPagamento){
            if($opcaoPagamento === $payment){
                $is_valid = true;
            } 
        }

        if($is_valid){
            $sucesso = 'Tudo numa boa';
        } else {
            $erro = 'Selecione um método de pagamento VÁLIDO';
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

        <?php foreach ($formas_pagamento as $pagamento => $pagamentoValue): ?>
            <div>
                <input type="radio" name="payment_option" id="payment_option" value="<?=$pagamentoValue?>">
                <label for="payment_option"><?=$pagamento?></label>
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