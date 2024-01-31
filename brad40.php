<?php
    $rpp = 10;
    $page = 1;
    if (isset($_GET['page'])) $page = $_GET['page'];
    $start = ($page - 1) * $rpp;
    $prev = $page - 1;
    $next = $page + 1;

    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');
    
    $sql = 'SELECT id,name,addr,city,town,picurl,feature FROM gift';
    if (isset($_GET['key']) && strlen($_GET['key']) > 0){
        $key = $_GET['key'];
        $key2 = "%{$key}%";

        $sql .= ' WHERE name LIKE ? OR addr LIKE ? OR feature LIKE ?';
        $sql .= ' LIMIT ?, ?';

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sssii', $key2, $key2, $key2, $start, $rpp);
    }else{
        $sql .= ' LIMIT ?, ?';
        $key= '';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ii', $start, $rpp);
    }
    
    if ($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($id,$name,$addr,$city,$town,$url,$feature);

?>
<form>
    Keyword:<input name="key" value='<?php echo $key; ?>' />
    <input type="submit" value="Search" />
</form>
<hr />
<a href='?page=<?php echo $prev; ?>&key=<?php echo $key; ?>' >Prev</a> | 
<a href='?page=<?php echo $next; ?>&key=<?php echo $key; ?>' >Next</a> 
<hr />
<table border="1" width='100%'>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Feature</th>
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
            echo "<td>{$feature}</td>";
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