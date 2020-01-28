<?php

$pdo = new PDO('sqlite:bbo_db.db');
$statement = $pdo->prepare('SELECT * FROM user');
$statement->execute();
$result = $statement->fetchAll(2);

for($i = 0; $i < 7; $i++){
    echo $result[$i]['lastname'];
    echo $result[$i]['firstname'];
    echo $result[$i]['age'];
    echo $result[$i]['address'];
}
