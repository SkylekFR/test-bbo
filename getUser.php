<?php

$pdo = new PDO('sqlite:bbo_db.db');
$statement = $pdo->prepare('SELECT * FROM user');
$statement->execute();
$result = $statement->fetchAll(2);
echo json_encode($result,1);
/*
echo '{"users": [';
for($i = 0; $i < 7; $i++){

    echo "{";
    echo '"lastname":"' . $result[$i]['lastname'] .'",';
    echo  '"firstname":"' .$result[$i]['firstname'] . '",';
    echo  '"age":' .$result[$i]['age'] . ',';
    echo '"address":"' . $result[$i]['address'] . '"';
    echo "}";
    if($i != 6){
        echo ',';
    }



}    echo "]}";

*/