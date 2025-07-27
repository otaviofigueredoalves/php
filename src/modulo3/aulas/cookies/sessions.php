<?php

/**
 * COOKIE X SESSION
 * A principal diferença é onde o conteúdo é guardado, uma sessão é guardada no servidor, enquanto o cookie é guardado no lado do cliente
 * 
 * COOKIE: pequeno arquivo de texto que o site salva no navegador, ou seja, fica guardado no lado do cliente. Ele é como se fosse uma etiqueta de verificação
 * SESSÃO: conjunto de informações temporárias sobre o que você fez no site
 * 
 * O cookie é como se fosse o ingresso para entrar no parque, quando for solicitado, serve de comprovação que você pagou para estar ali no parque
 * 
 * A sessão é como se fosse um armário onde está suas atividades durante o trajeto do parque, por exemplo, você foi no brinquedo kamikaze, mostrou seu cookie, e essa informação ficou guardada em um armário, ou seja, a sessão
 * 
 * Toda vez que seu navegador faz uma requisição para o site (clica num link, envia um formulário), ele mostra esse cookie-chave. O servidor lê o ID da chave, abre o armário correspondente (a sessão) e já sabe quem você é, o que está no seu carrinho, se você está logado, etc.
 * 
 * É possível lembrar de sua sessão através do cookie (Lembrar de mim)
 * 
 * Ou seja, a sessão é o armário temporário onde é armazenado as atividades do site
 */