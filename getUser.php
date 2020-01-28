<?php

$pdo = new PDO('sqlite:bbo_db.db');
$statement = $pdo->prepare('SELECT * FROM user');
$statement->execute();
$result = $statement->fetchAll(2);
echo json_encode($result,1);