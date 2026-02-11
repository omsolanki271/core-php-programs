<?php
// Name : Solanki Om
// Address : Bhanvad
    $a = 0;
    $b = 1;
    $n = 5;
    echo "Fibonacci Series:<br>";
    for($i = 0; $i<=$n;$i++)
    {
        echo $a. "</br>";
        $ans = $a + $b;
        $a = $b;
        $b = $ans;
    }        
?>