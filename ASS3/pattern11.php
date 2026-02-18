<?php

$n = 5;
$a = 65;
for($i=1;$i<=$n;$i++)
    {
    for($j=1;$j<=$n-$i+1;$j++)
        {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    for($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . " ";
    }

    for ($j = $i - 1; $j >= 1; $j--) {
        echo chr(64 + $j) . " ";
    }    
    echo "<br>";
}

?>