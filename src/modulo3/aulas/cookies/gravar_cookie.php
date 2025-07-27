<?php

/**
 * Define um cookie a ser enviado junto com o restante dos cabeçalhos HTTP.
 *
 * Um cookie é uma pequena parte de dados que um servidor envia para o navegador
 * do usuário. O navegador pode armazená-lo e enviá-lo de volta com solicitações
 * futuras para o mesmo servidor.
 *
 * @param string $name     O nome do cookie.
 * @param string $value    O valor do cookie. Este valor é armazenado no cliente;
 * não armazene informações sensíveis.
 * @param int    $expires  (Opcional) O tempo em que o cookie expira. Este é um
 * timestamp Unix, então é o número de segundos desde a
 * época. Uma forma comum de definir isso é usando a função
 * time() mais o número de segundos até a expiraçã o.
 * Por exemplo, time() + 3600 para 1 hora. Se definido
 * como 0, ou omitido, o cookie expirará no final da
 * sessão (quando o navegador for fechado).
 */
setcookie('meu_cookie4', 'lindo cookie', time() + 10); // Exemplo de expiração em 10 segundos
