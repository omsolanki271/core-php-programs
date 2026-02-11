<?php
// Name : Solanki Om
// Address : Bhanvad
$n = 12;
$rev = 0;

while($n > 0)
{
    $rem = $n % 10;
    $rev = ($rev * 10) + $rem;
    $n = (int) ($n / 10);
}
echo "Reverse of any number. = " .$rev;

?>