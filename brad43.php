<?php
    if (!isset($_POST['account'])) header('Location: brad43.php');

    $account = $_POST['account'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $name = $_POST['name'];

    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');

    $sql = 'SELECT account FROM member WHERE account = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 0){
        $sql = 'INSERT INTO member (account,passwd,name) VALUES (?,?,?)';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sss', $account, $passwd, $name);
        if ($stmt->execute()){
            echo 'OK';
        }else{
            echo 'XX';
        }
    
    }else{
        header('Location: brad42.html');
    }


?>