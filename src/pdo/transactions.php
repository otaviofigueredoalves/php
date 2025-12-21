<?php
include_once 'connection.php';
/**
 * TRANSACTIONS: garantem que um conjunto de operações seja executado com SUCESSO ou não seja executado
 * 
 * ACID
 * Atomicidade - TUDO OU NADA, se uma parte falhar tudo é desfeito
 * Consistência - Banco íntegro. Leva um banco de um estado válido para outro estado válido
 * Isolamento - Transações não interferem entre si. Ou seja, se duas pessoas tentarem comprar o mesmo e último ingresso ao mesmo tempo (transações paralelas) uma não vai ver o "meio do caminho" da outra. Uma espera a outra terminar.
 * Durabilidade - Dados confirmados são salvos mesmo com falha no sistema. Assim que você recebe a mensagem "Sucesso" (Commit), aquele dado está gravado fisicamente no disco (HD/SSD). Mesmo que alguém arranque a tomada do servidor 1 milissegundo depois, quando a luz voltar, o dado estará lá.
 */

 
$sql = 'INSERT INTO usuarios (name,username,password) VALUES (:name, :username, :password)';
$stmt = $pdo->prepare($sql);

try {
    $pdo->beginTransaction();
    // USER 1 ----------------
    $name = "Otavio001";
    $username = "memeudaradio";
    $password = "gg";

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    echo "Usuário $name inserido";

    $pdo->exec('SAVEPOINT user1_savepoint');

    // USER 2 ---------------
    $name2 = "Otavio002";
    $username2 = "osvaldomotorista";
    $password2 = "motorista";

    $stmt->bindParam(':name', $name2);
    $stmt->bindParam(':username', $username2);
    $stmt->bindParam(':password',$password2);
    $stmt->execute();
    echo "Usuário $name2 inserido";

    $pdo->exec('SAVEPOINT user2_savepoint');

    // USER 3 ---------------
    $name3 = "Otavio003";
    $username3 = "osvaldomotorista";
    $password3 = "motorista";

    $stmt->bindParam(':name', $name3);
    $stmt->bindParam(':username', $username3);
    $stmt->bindParam(':password',$password3);
    $stmt->execute();
    echo "Usuário $name3 inserido";

    $pdo->exec('SAVEPOINT user3_savepoint');

    $pdo->exec('ROLLBACK TO user1_savepoint');

    $pdo->commit();

} catch (PDOException $e){
    $pdo->rollBack();
    echo "Erro na transação: ".$e->getMessage();
}
