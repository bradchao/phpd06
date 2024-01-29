<?php
    $rate = 0;
    if (isset($_GET['rate'])) $rate = $_GET['rate'];
    
    $img = ImageCreate(400, 20);
    //var_dump($img);

    $yellow = imagecolorallocate($img, 255, 255, 0);
    $red = imagecolorallocate($img, 255, 0, 0);
    imagefilledrectangle($img, 0, 0, 400, 20, $yellow);
    imagefilledrectangle($img, 0, 0, (int)(400*$rate/100), 20, $red);

    header('content-type: image/jpeg');
    imagejpeg($img);

    imagedestroy($img);

?>