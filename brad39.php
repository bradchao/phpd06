<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');

    $sql = 'SELECT name gname, city country FROM gift';
    $result = $mysqli->query($sql);
    //var_dump($result);
    while ($row = $result->fetch_object()){
        echo "{$row->gname}:{$row->country}<br />";
    }
?>