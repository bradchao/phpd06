<?php
    function sayYa(){
        echo 'Ya<br />';
    }
    function sayHello($name = 'World'){
        echo "Hello, {$name}<br />";
    }
    function sayHelloV2($name = 'World', $n = 1){
        for ($i = 0; $i < $n; $i++){
            echo "Hello, {$name}<br />";
        }
    }
    function sum(){
        //echo func_num_args();
        $ary = func_get_args();
        $sum = 0;
        foreach($ary as $v){
            $sum += $v;
        }
        return $sum;
    }

    function checkTWId($id){
        $isRight = false;
        // if (strlen($id) == 10){
        //     $c1 = substr($id, 0, 1);
        //     $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //     if (strpos($letters, $c1) !== false){
        //        $c2 = substr($id, 1, 1);
        //        if ($c2 == '1' || $c2 == '2'){

        //        }
        //     }
        // }
        define('LETTERS', 'ABCDEFGHJKLMNPQRSTUVXYWZIO');
        if (preg_match('/^[A-Z][12][0-9]{8}$/',$id)){
            $c1 = substr($id, 0, 1);
            $a12 = strpos(LETTERS, $c1) + 10;
            $a1 = (int)($a12 / 10);
            $a2 = $a12 % 10;
            $n1 = substr($id, 1, 1);
            $n2 = substr($id, 2, 1);
            $n3 = substr($id, 3, 1);
            $n4 = substr($id, 4, 1);
            $n5 = substr($id, 5, 1);
            $n6 = substr($id, 6, 1);
            $n7 = substr($id, 7, 1);
            $n8 = substr($id, 8, 1);
            $n9 = substr($id, 9, 1);

            $sum = $a1*1 + $a2*9 + $n1*8 + $n2*7 + $n3*6 + $n4*5 + $n5*4 +
                    $n6*3 + $n7*2 + $n8*1 + $n9*1;
            $isRight = $sum % 10 == 0; 
        }
        return $isRight;
    }

    function createTWIdByRandown(){
        return 'A123456789';
    }
    function createTWIdByAreaCode($areaCode = 'A'){
        return 'A123456789';
    }
    function createTWIdByGender($gender = true){
        return 'A123456789';
    }
    function createTWIdByAreaCodeAndGender($areaCode, $gender){
        return 'A123456789';
    }



    


?>