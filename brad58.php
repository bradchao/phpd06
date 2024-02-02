<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');

    $result = $mysqli->query('call test1(10,3)');
    $row = $result->fetch_object();
    echo $row->v;
?>