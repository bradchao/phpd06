<?php
    session_start();
    //if (!isset($_SESSION["rand"])) header("location: brad55.php");
    
    $rand = $_SESSION['rand'];
    echo $rand . '<hr />';

    $ary = $_SESSION['ary'];
    var_dump($ary);


?>
<hr />
<a href="brad57.php">Game over</a>