<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');

    $sql = 'INSERT INTO gift (name,addr) VALUES ("brad","abcdefg")';
    $mysqli->query($sql);

?>