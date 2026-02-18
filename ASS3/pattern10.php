<?php
$n =5 ;
for($i=1;$i<=$n;$i++)
    {
        for($j=1;$j<=$i;$j++)
            {
                echo "&nbsp;&nbsp";
            }
        
        for($j=1;$j<=($n * 2 - (2 * $i - 1));$j++)
            {
                echo "*";
            }
            echo "<br>";
    }
?>