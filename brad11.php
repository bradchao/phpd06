<?php
    $a = 10; $b = 3;
    if ($a++ > 10 & --$b < 3){
        echo "OK: a = {$a}; b = {$b}";
    }else{
        echo "XX: a = {$a}; b = {$b}";
    }
?>
<hr />
<?php
    $c = 3; $d = 2;
    echo $c ^ $d;
?>
<hr />
<?php
    $e = 17; $f = 3;
    //$g = $e; $e = $f; $f = $g;

    // $e = $e + $f;   // $e = 13
    // $f = $e - $f;   // $f = 10;
    // $e = $e - $f;   // $e = 3;

    $e = $e ^ $f;
    $f = $e ^ $f;
    $e = $e ^ $f;

    echo "e = {$e}; f = {$f}";
?>