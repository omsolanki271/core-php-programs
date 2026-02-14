<?php
$number = 1221;
$temp = $number;
$reverse = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = (int)($temp / 10);
}

if ($number == $reverse) {
    echo "$number is a Palindrome Number";
} else {
    echo "$number is NOT a Palindrome Number";
}
?>
