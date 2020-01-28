<?php


$pdo = new PDO('sqlite:bbo_db.db');
$pdo->beginTransaction();

try {
    $statement = $pdo->prepare(
        'DELETE FROM user WHERE idUser = :idUser');
    $statement->bindParam('idUser', $_POST['idUser'], PDO::PARAM_INT);

    $statement->execute();
} catch (PDOException $e) {
    $pdo->rollBack();
    die($e->getMessage());
}
$pdo->commit();



