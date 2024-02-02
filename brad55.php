<?php
    include("bradapis.php");
    session_start();

    $rand = rand(1,49);
    echo $rand;
    $_SESSION['rand'] = $rand;
    $rand = 1000;

    $ary = [1,2,3,4,5];
    $_SESSION['ary'] = $ary;

    $s1 = new Student('Brad', 70, 45, 56);
    echo "<br />{$s1->getName()} : {$s1->sum()} : {$s1->avg()}<br />";
    $_SESSION['s1'] = $s1;
    $s1->setMath(100);

?>
<hr />
<a href='brad56.php'>Next</a>