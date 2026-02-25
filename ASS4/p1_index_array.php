<?php
//Print friend’s name without using a loop.
echo "<h3>Without Loop:</h3>";
$fname = array("Om Solanki", "Jay", "Meet", "Rahul");

echo $fname[0] . "<br>";
echo $fname[1] . "<br>";
echo $fname[2] . "<br>";

/*Print friend’s name using:
    -> for loop (using count() function)
    -> foreach loop
*/

echo "-----------------<br>";
echo "<h3>Using for loop:</h3>";
for ($i=0;$i<count($fname);$i++)
    {
        echo $fname[$i] . "<br>";
    }

echo "------------------<br>";
echo "<h3>Using foreach loop:</h3>";

foreach($fname as $x)
    {
        echo $x . "<br>";
    }

echo "------------------<br>";
echo "<h3>Length of each element:</h3>";


foreach($fname as $y)
    {
        echo $y . "=>" . strlen($y) . "<br>";
    }

echo "------------------<br>";
echo "<h3>Reverse Order:</h3>";
for ($i = count($fname) - 1; $i >= 0; $i--) {
    echo $fname[$i] . "<br>";
}

echo "------------------<br>";
echo "<h3>Reverse Format:</h3>";
foreach($fname as $z)
    {
        echo $z . "=>" . strrev($z) . "<br>";
    }

?>


