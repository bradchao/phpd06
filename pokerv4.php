<?php
    $poker = range(0,51);
    shuffle($poker);
    // foreach($poker as $k => $v){
    //     echo "[{$k}] = {$v}<br />";
    // }
?>
<hr />
<?php
    $players = [[],[],[],[]];
    foreach($poker as $i => $card){
        $players[$i%4][(int)($i/4)] = $card;
    }

?>
<table border="1" width="100%">

    <?php
        $launchs = ['<font color=black>&spades;','<font color=red>&hearts;',
        '<font color=red>&diams;', '<font color=black>&clubs;'];
        $values = ['A', 2,3,4,5,6,7,8,9,10, 'J','Q','K'];
        foreach($players as $player){
            sort($player);
            echo '<tr>';
            foreach($player as $card){
                $launch = $launchs[(int)($card/13)];
                $value = $values[$card % 13];
                echo "<td>{$launch}{$value}</font></td>";
            }
            echo '</tr>';
        }


    ?>

</table>
&spades; &hearts; &diams; &clubs;