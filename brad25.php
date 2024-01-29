<?php
    $dir = @opendir('.') or exit('Server Busy');
    //var_dump($dir);

    while ($data = readdir($dir)){
        echo "{$data}<br />";
    }

    closedir($dir);
?>