<?php
        $mysqli = new mysqli('localhost','root','', 'iii');
        $mysqli->set_charset('utf8');

        $id = 3;

        $sql2 = 'DELETE FROM member WHERE id = ?';
        $stmt = $mysqli->prepare($sql2);
        $stmt->bind_param('i',$id);
        if ($stmt->execute()){
            echo 'OK4';
        }else{
            echo 'XX4';
        }


?>