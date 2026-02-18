<?php
$n=5;
for($i=1;$i<=$n;$i++)
    {
        for($j=1;$j<=$n-$i;$j++)
            {
                echo "&nbsp;&nbsp;";
            }
        for($k=1;$k<=$i;$k++)
            {
                echo "*";
            }
        echo "<br>";
    }
?>