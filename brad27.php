<?php
    $data = "Hello, World\n1234567\n7654321\nabcdefg";
    $fp = fopen('dir1/file1.txt', 'w');
    fwrite($fp, $data);
    fflush($fp);
    fclose($fp);

?>