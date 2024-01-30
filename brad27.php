<?php
    $dir = 'dir2/dir3/dir4';
    if (!file_exists($dir)){
        mkdir($dir, 0777, true);
    }

    $data = "Hello, World\n1234567\n7654321\nabcdefg";
    $fp = fopen("{$dir}/file1.txt", 'a');
    fwrite($fp, "Brad\n");
    fflush($fp);
    fclose($fp);

?>