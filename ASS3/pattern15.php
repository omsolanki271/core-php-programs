<?php
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        for ($j = 1; $j <= $i; $j++) {
            if ($j % 2 == 0) {
                echo "1";
            } else {
                echo "0";
            }
        }
    } else {
        for ($j = 1; $j <= $i; $j++) {
            if ($j % 2 == 0) {
                echo "0";
            } else {
                echo "1";
            }
        }
    }
    echo "<br>";
}

?>