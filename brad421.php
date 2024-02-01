<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');

    $sql = 'SELECT * FROM member WHERE id = 9';
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();

    echo $row['name'] . '<hr />';
?>
Icon: <img src='data:image/jpeg;base64, <?php echo base64_encode($row['icon']);?>' />