<?php
/**
 * ENCAPSULAMENTO: Definição de permissões para propriedades e métodos do objeto.
 * 
 * PUBLIC: pode ser acessado de qualquer parte do código, todos tem acesso;
 * PROTECTED: somente a família daquela classe tem acesso;
 * PRIVATE: somente o objeto tem acesso
 * 
 * #PUBLIC: Um membro público é a interface externa do seu objeto. É como a porta da frente, os botões e a tela de um aparelho: qualquer um pode interagir com eles.
 * - Quem pode acessar? A própria classe, classes filhas (a "família") e o código externo (qualquer outra parte do seu programa).
 * 
 * #PROTECTED: 
 * - Quem pode acessar? A própria classe que o definiu E qualquer classe que herde dela (classes filhas).
 * - Quem NÃO pode acessar? O código externo.
 * 
 * #PRIVATE: Aqui está o ponto que merece mais detalhe. Sua definição "somente o objeto tem acesso" está conceitualmente correta, mas vamos ser mais precisos para diferenciá-la da protected.
 * 
 * - Quem pode acessar? SOMENTE E EXCLUSIVAMENTE a própria classe que o declarou.
 * - Quem NÃO pode acessar? Nem mesmo as classes filhas (a "família") podem acessá-lo diretamente. E, claro, o código externo também não.
 * 
 * Um membro private é um segredo interno, um detalhe de implementação tão específico daquela classe que nem mesmo seus herdeiros precisam ou deveriam saber sobre ele. Isso garante que você possa mudar essa implementação interna no futuro sem quebrar nenhuma classe filha que dependa dela.
 */