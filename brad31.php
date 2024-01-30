<?php
    $fp = fopen('dir1/ns1hosp.csv', 'r');
    fgets($fp);
    while ($row = fgetcsv($fp)){
        echo "{$row[1]}:{$row[2]}:{$row[4]}:{$row[7]}<br />";
    }
    fclose($fp);
?>