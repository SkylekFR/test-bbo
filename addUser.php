<?php


$pdo = new PDO('sqlite:bbo_db.db');
$pdo->beginTransaction();

try{
    $statement = $pdo->prepare(
        'INSERT INTO user(lastname, firstname, age, address, city) 
               VALUES(:lastname, :firstname, :age, :address, :city)');
    $statement->bindParam('lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindParam('firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindParam('age', $_POST['age'], PDO::PARAM_INT);
    $statement->bindParam('address', $_POST['address'], PDO::PARAM_STR);
    $statement->bindParam('city', $_POST['city'], PDO::PARAM_STR);
    $statement->execute();
}catch(PDOException $e){
    $pdo->rollBack();
    die($e->getMessage());
}
$pdo->commit();



