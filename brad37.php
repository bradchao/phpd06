<?php
        $mysqli = new mysqli('localhost','root','', 'iii');
        $mysqli->set_charset('utf8');

        $account = 'mark'; $name = 'Mark'; $id = 2;

        $sql2 = 'UPDATE member SET account=?,name=? WHERE id =?';
        $stmt = $mysqli->prepare($sql2);
        $stmt->bind_param('ssi',$account,$name,$id);
        if ($stmt->execute()){
            echo 'OK3';
        }else{
            echo 'XX3';
        }


?>