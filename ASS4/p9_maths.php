<?php

echo "<h2>PHP Built-in Math Functions Demo</h2>";
echo "<hr>";

// 1. abs()
$num1 = -25;
echo "1. abs($num1) = " . abs($num1);
echo "<br><br>";

// 2. sqrt()
$num2 = 49;
echo "2. sqrt($num2) = " . sqrt($num2);
echo "<br><br>";

// 3. pow()
echo "3. pow(3, 4) = " . pow(3, 4);
echo "<br><br>";

// 4. round()
$num3 = 5.67;
echo "4. round($num3) = " . round($num3);
echo "<br><br>";

// 5. ceil()
$num4 = 6.21;
echo "5. ceil($num4) = " . ceil($num4);
echo "<br><br>";

// 6. floor()
$num5 = 6.89;
echo "6. floor($num5) = " . floor($num5);
echo "<br><br>";

// 7. rand()
echo "7. rand(1, 100) = " . rand(1, 100);
echo "<br><br>";

// 8. max()
echo "8. max(10, 45, 67, 23) = " . max(10, 45, 67, 23);
echo "<br><br>";

// 9. min()
echo "9. min(10, 45, 67, 23) = " . min(10, 45, 67, 23);
echo "<br><br>";

// 10. number_format()
$num6 = 1500000;
echo "10. number_format($num6) = " . number_format($num6);
echo "<br><br>";

?>