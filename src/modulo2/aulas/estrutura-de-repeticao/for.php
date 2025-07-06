<?php

for($idade = 1; $idade <= 100; $idade++){
    echo "Olá, você tem $idade anos! <br>";
}
echo "$idade"; // OBS: a variável dentro do for realiza o último incremento, onde $idade será 101, ou seja, maior que 100. Esse último incremento pode ser utilizado, apesar de ser incomum.