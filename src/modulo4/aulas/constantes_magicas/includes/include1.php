<?php
/**
 * A função getcwd() retorna o Diretório de Trabalho Atual. Em um contexto web, este é quase sempre o diretório do script que iniciou a execução. Não tem a ver com o arquivo onde a função getcwd() foi escrita, mas sim com quem "chamou" o processo todo.
 */
echo 'O retorno do include1 __DIR__ é o seguinte:' . __DIR__;
echo "<br>";
echo 'O retorno do include1 __DIR__ é o seguinte:' . __FILE__;
echo "<br>";
echo 'O retorno do getcwd() em include1 é o seguinte:' . getcwd();
echo "<hr>";