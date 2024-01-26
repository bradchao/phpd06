<?php
    $a[] = 12;
    var_dump($a);
    $a[] = 'Brad';
    var_dump($a);
    echo '<hr />';
    $a[7] = 'OK';
    var_dump($a);
    echo '<hr />';
    $a[] = 1234;
    var_dump($a);
    echo '<hr />';
    $a['name'] = 'Tony';
    $a['gender'] = true;
    $a['age'] = 18;
    var_dump($a);
?>