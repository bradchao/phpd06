<?php
    $fp = fopen('dir1/ns1hosp.csv', 'r');
    fgets($fp);
    while ($line = fgets($fp)){
        $row = explode(',', $line);
        echo "{$row[2]}:{$row[4]}:{$row[7]}<br />";
    }
    fclose($fp);
?>