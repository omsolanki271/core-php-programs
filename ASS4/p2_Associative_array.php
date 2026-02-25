<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "Canada" => "Ottawa",
    "Australia" => "Canberra",
    "Germany" => "Berlin",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "China" => "Beijing",
    "Brazil" => "Brasilia"
);

echo "<h2>country and capital in Table</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo "<th>Country</th>";
echo "<th>Capital</th>";
echo "</tr>";

foreach($countries as $country => $capital)
{
    echo "<tr>";
    echo "<td>" . $country . "</td>";
    echo "<td>" . $capital . "</td>";
    echo "</tr>";
}

echo "</table>";
?>