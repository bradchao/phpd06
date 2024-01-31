<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');
    
    $sql = 'SELECT id,name,addr,city,town,picurl FROM gift';
    $stmt = $mysqli->prepare($sql);
    if ($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($id,$name,$addr,$city,$town,$url);

?>
<table border="1" width='100%'>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Town</th>
        <th>Picture</th>
    </tr>
    <?php
        while ($stmt->fetch()){
            echo '<tr>';
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$addr}</td>";
            echo "<td>{$city}</td>";
            echo "<td>{$town}</td>";
            echo "<td><a href='{$url}'><img src='{$url}' width='80px' height='45px' /></a></td>";
            echo '</tr>';
        }
    ?>
</table>
<?php
    }else{
        echo 'XX';
    }
?>