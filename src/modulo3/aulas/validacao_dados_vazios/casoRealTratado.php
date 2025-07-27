<?php

//isset() - verifica se uma variavel foi setada, mas ignora totalmente se tem ou não valor

// empty() - verifica se uma variável foi setada, e se ela TEM valor
// '', null, undefined

if (!empty($_GET['campanha'])){
    $numero_campanha = $_GET['campanha'];
    echo "Você veio pela campanha $numero_campanha";
} else {
    echo 'Variável não definida';
}

// Se eu não passar nada, utilizando isset(), caso passe um valor vazio na URL, ele irá exibir o valor vazio

// caso use o empty(), ele irá verificar se a variável foi setada e se tem valor

// então, é importante notar nesse código que só tratamos os dados depois de garantir que eles existem


// Este exemplo é didático, e não representa a forma REAL como permitir com que um usuário REAL insira dados. Para um exemplo mais próximo a realidade, utilizaremos a tag FORM, onde ficará o formulário com inputs que o usuário irá preencher e fará toda a automação de enviar os dados via URL.