<?php
// Name : Solanki Om
// Address : Bhanvad
$num = 5;
$c =0;
for($j=1;$j<=$num;$j++)
{
    if($num%$j==0)
    {
        $c++;
        
    }
}
if($c == 2)
    {
        echo $num . " is prime number";
    }
else
    {
        echo $num . " is not prime number";
    }
?>