<?php
    date_default_timezone_set('Asia/Taipei');
    $dir = '.';
    $fp = opendir($dir);
?>
<table border='1' width='100%'>
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Filesize</th>
        <th>Datetime</th>
    </tr>
    <?php
    while ($file = readdir($fp)){
        $fullname = "{$dir}/{$file}";

        echo '<tr>';
        echo "<td>{$file}</td>";

        if (is_dir($fullname)){
            echo "<td>Directory</td>";
        }else if (is_file($fullname)){
            echo "<td>File</td>";
        }else{
            echo "<td>Unknow</td>";
        }
        
        echo "<td align='right'>" . filesize($fullname) . " bytes</td>";
        
        $mtime = date('Y-m-d H:i:s', filemtime($fullname));
        echo "<td align='center'>" . $mtime . "</td>";
        echo '</tr>';    
    }
    ?>
</table>