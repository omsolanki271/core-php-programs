<?php
$n = 5;
$a = 69;
for($i=1;$i<=$n;$i++)
    {
        for($j=1;$j<=$n-$i+1;$j++)
            {
                echo chr($a);
            }
            $a--;
        echo "<br>";
    }
?>