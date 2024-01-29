<?php
    include('bradapis.php');

    if (checkTWId('B122861572')){
        echo 'OK';
    }else{
        echo 'XX';
    }
    echo '<hr />';
    echo createTWIdByRandown() . '<br />';
    echo createTWIdByAreaCode('B') . '<br />';
    echo createTWIdByGender(false) . '<br />';
    echo createTWIdByAreaCodeAndGender('Y', true) . '<br />';

?>