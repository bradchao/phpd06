<?php
    $mysqli = new mysqli('localhost','root','', 'iii');
    $mysqli->set_charset('utf8');
    
    $sql = 'SELECT id,name,addr,city,town,picurl,feature FROM gift LIMIT 14, 7';
    if (isset($_GET['key'])){
        $key = $_GET['key'];
        $key2 = "%{$key}%";

        $sql .= ' WHERE name LIKE ? OR addr LIKE ? OR feature LIKE ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sss', $key2, $key2, $key2);
    }else{
        $key= '';
        $stmt = $mysqli->prepare($sql);
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
<a href='?page=?' >Prev</a> | <a href='?page=?' >Next</a> 
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