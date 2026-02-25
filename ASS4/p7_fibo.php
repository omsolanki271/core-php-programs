<?php

function fibo($num)
{
    $a = 0;
    $b = 1;
    $sum = 0;
    for($i = 1;$i<=$num;$i++)
        {
            $sum = $a + $b;
            echo  $a . " || " ."om <br>" ;
            $a = $b;
            $b = $sum;
        }

}

fibo(5)

?>