<?php

/**
 * POLIMORFISMO
 * 
 * EXISTEM 2 TIPOS: POLIMORFISMO DE SOBREESCRITA E POLIMORFISMO DE SOBRECARGA
 * 
 * O polimorfismo de sobreescrita é o método presente no pai que quando chega nos filhos é sobreescrito para atender a necessidade dos filhos.Ou seja, o pai é GENÉRICO enquanto os filhos são ESPECIALISTAS. Já o polimorfismo de sobrecarga (adhoc) são 2 métodos definidos no pai, com o mesmo nome, só que suas ações dependem da quantidade de parâmetros, claro que, referente ao polimorfismo de sobrecarga, em PHP ele não é possível da forma como foi dita aqui. O PHP não permite que 2 métodos possuem o mesmo nome na mesma classe, então, pra simular este tipo de polimorfismo basta um ÚNICO método que possui um parâmetro opcional, caso este parâmetro exista, executar tal ação, caso não, execute a ação padrão. Exemplo: function somar($a, $b, $c = null){}
 */