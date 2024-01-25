<?php
    $start = 1; $rows = 1; $cols = 9;
    if (isset($_GET['start'])){
        $start = $_GET['start'];
        $rows = $_GET['rows'];
        $cols = $_GET['cols'];
    }
?>
<h1>Brad Big Company</h1>
<hr />
<form>
    Start: <input type="number" name="start" />
    Rows: <input type="number" name="rows" />
    Cols: <input type="number" name="cols" />
    <input type="submit" value="go" />
</form>
<hr />
<table border="1" width="100%">

<?php
    define('ROWS', $rows);
    define('COLS',$cols );
    define('START', $start);

    for ($k = 0; $k < ROWS; $k++){
        echo '<tr>';
        for ($j = START; $j< (START+COLS); $j++){
            $newj = $j + $k * COLS;
            echo '<td bgcolor=yellow>';
            for ($i = 1; $i <= 9; $i++){
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br />";
            }
            echo '</td>';    
        }
        echo '</tr>';
    
    }
?>

</table>