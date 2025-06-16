<?php 
$nome = "Otavio Figueredo";
$idade = 18;
$sexo = 'M';
$salario_mensal = 2500.00;
$salario_anual = 2500 * 12;
$esta_empregado = true;
$habilidades = ["PHP", "Javascript", "HTML", "CSS"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?=$nome?></strong></p>
            <p>Idade: <strong><?=$idade?></strong></p>
            <p>Sexo: <strong><?=$sexo?></strong></p>
            <p>Salário Mensal: <strong><?=$salario_mensal?></strong></p>
            <p>Salário Anual: <strong><?=$salario_anual?></strong></p>
            <p>Status de Emprego: <strong><?php
            if ($esta_empregado != true){
                echo "Não empregado";
            } else {
                echo "Empregado";
            }
            
            
            ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?php
            if ($sexo == "M"){
                $total_aposentar = 65;
            } else {
                $total_aposentar = 60;
            }

            echo $total_aposentar - $idade;
            
            ?></strong></p>
            <p>Habilidades: <strong><?=implode(', ' , $habilidades );?></strong></p>
        </div>
    </div>
</body>

</html>