<?php
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=iii","root","");
    $stmt = $pdo->prepare('call test1(?,?)');
    $param = [100, 33];
    $stmt->execute($param);
    $result = $stmt->fetchObject();
    echo $result->v;
?>