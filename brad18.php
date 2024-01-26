<?php
    $a = [];
    var_dump($a);
    echo '<hr />';
    $a[] = [];  // $a[0] => array
    $a[] = ['Brad', 'Peter'];
    $a[] = 123;
    $a[0][] = 3;
    $a[0][] = [11,22,33]; 
    var_dump($a);
    echo '<hr />';
    echo count($a[0]);
    echo '<hr />';
    foreach($a as $k => $v){
        if (gettype($v) == 'array'){
            foreach($v as $kk => $vv){
                if (gettype($vv) == 'array'){
                    foreach($vv as $kkk => $vvv){
                        echo $vvv . ' ';
                    }
                }else{
                    echo $vv;
                }
                echo '<br />';
            }
        }else{
            echo $v;
        }
        echo '<hr />';
    }
?>