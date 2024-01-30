<?php
    class Bike {
        // 物件屬性 -> 有物件才有的屬性
        protected $speed;

        // 建構式/子/方法
        function __construct(){
            $this->speed = 0;
        }

        // 物件方法 -> 有物件才有的方法
        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed*1.4;
        }
        function downSpeed(){
            $this->speed = $this->speed < 1 ? 0 : $this->speed*0.7;
        }
        function getSpeed(){
            return $this->speed;
        }
    }

    class Scooter extends Bike{
        private $gear;

        function __construct(){
            $this->gear = 0;
        }

        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed*1.4*$this->gear;
        }
        function changeGear($gear){
            if ($gear >= 0 && $gear <= 4){
                $this->gear = $gear;
            }
        }
    }

    $myBike = new Bike();
    //var_dump($myBike);
    $myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
    //$myBike->speed = 10.1;
    echo $myBike->getSpeed();
    echo '<hr />';
    $myScooter = new Scooter();
    $myScooter->changeGear(2);
    $myScooter->upSpeed();$myScooter->upSpeed();$myScooter->upSpeed();$myScooter->upSpeed();
    echo $myScooter->getSpeed();


?>