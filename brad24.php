<?php
    $img = imagecreatefromjpeg('https://fileinfo.com/img/ss/xl/jpeg_43-2.jpg');

    $blue = imagecolorallocate($img, 0, 0, 255);
    imagettftext($img, 36, -30, 40, 200, $blue, 'fonts/NotoSerifTC-Bold.otf', 
        '資展專屬,歡迎盜連');

    header('content-type: image/jpeg');
    imagejpeg($img);
    imagejpeg($img, 'imgs/brad.jpg');

    imagedestroy($img);
?>