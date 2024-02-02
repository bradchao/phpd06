<?php
    session_start();

    $rand = rand(1,49);
    echo $rand;
    $_SESSION['rand'] = $rand;
    $rand = 1000;

    $ary = [1,2,3,4,5];
    $_SESSION['ary'] = $ary;

?>
<hr />
<a href='brad56.php'>Next</a>