<?php
$n = 5;
$start = 1;

for ($i = 1; $i <= $n; $i++) {

   
    $num = $start;
    for ($j = 1; $j <= $i; $j++) {
        echo $num;
        $num++;
    }

    $num = $num - 2;
    for ($j = 1; $j <$i; $j++) {
        echo $num;
        $num--;
    }

    echo "<br>";
}
?>