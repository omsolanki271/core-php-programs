<?php
// Name : Solanki Om
// Address : Bhanvad

$a = 20;
$b = 10;
$c = 3;   

switch ($c) {
    case 1:
        echo "Addition = " . ($a + $b);
        break;

    case 2:
        echo "Subtraction = " . ($a - $b);
        break;

    case 3:
        echo "Multiplication = " . ($a * $b);
        break;

    case 4:
        if ($b != 0)
            echo "Division = " . ($a / $b);
        else
            echo "Division by zero not allowed";
        break;

    default:
        echo "Invalid Choice";
}
?>
