<?php
// Name : Solanki Om
// Address : Bhanvad

$n = 153;
//$n = 1634;
//$n = 54748;
$ans = 1;
$res = $n; 
$rs =0 ;
$len = (int)strlen((string)$n);

for($i =1 ;$i<=$len;$i++)
{
    $rem = (int)($n % 10);  // 2 
    for($j =1;$j<=$len;$j++)
    {
        $ans = $ans * $rem;  
    }
    $rs = $rs + $ans;
    $n = (int)($n / 10);
    $ans = 1;       
}
//echo $rs. "<br>";
if($rs == $res)
{
    echo $res . " is Armstrong Number ";
}
else
{
    echo $res . " is not Armstrong Number ";
}

?>
