<?php
    include('bradapis.php');
    session_start();
    //if (!isset($_SESSION["rand"])) header("location: brad55.php");
    
    $rand = $_SESSION['rand'];
    echo $rand . '<hr />';

    $ary = $_SESSION['ary'];
    var_dump($ary);

    $s1 = $_SESSION['s1'];
    echo "<br />{$s1->getName()} : {$s1->sum()} : {$s1->avg()}<br />";

?>
<hr />
<a href="brad57.php">Game over</a>