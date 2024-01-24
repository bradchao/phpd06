<?php
    $x = $y = $result = '';
    if (isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        $result = $x + $y;
        //echo "{$x} + {$y} = {$result}";    
    }
?>
<form>
    <input name="x" value='<?php echo $x; ?>' />
    <select name='op'>
        <option value='1'>加</option>
        <option value='2'>減</option>
        <option value='3'>乘</option>
        <option value='4'>除</option>
    </select>
    <input name="y" value='<?php echo $y; ?>' />
    <input type="submit" value="=" />
    <span><?php echo $result; ?></span>
</form>