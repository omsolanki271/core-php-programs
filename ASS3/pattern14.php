<?php
$n = 5;
$a = 1;
for($i=1;$i<=$n;$i++)
    {
        for($j=1;$j<=2*$i-1;$j++)
            {
                echo $a . " ";
                $a++;
            }
            
        echo "<br>";
    }
?>