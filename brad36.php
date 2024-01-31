<?php
        $mysqli = new mysqli('localhost','root','', 'iii');
        $mysqli->set_charset('utf8');

        $account = 'brad'; $passwd = '123456'; $name = 'Brad';
        $sql1 = "INSERT INTO member (account,passwd,name)" . 
            " VALUES ('{$account}','{$passwd}','{$name}')";
        //echo $sql1;
        if ($mysqli->query($sql1)){
            echo 'OK';
        }else{
            echo 'XX';
        }
        echo '<hr />';

        $sql2 = 'INSERT INTO member (account,passwd,name) VALUES (?,?,?)';
        $stmt = $mysqli->prepare($sql2);
        $stmt->bind_param('sss',$account,$passwd,$name);
        if ($stmt->execute()){
            echo 'OK2';
        }else{
            echo 'XX2';
        }


?>