<!DOCTYPE html>
<html>
<head>
    <title>GET Method Practical</title>
</head>
<body>

<h2>GET Method Example</h2>


<form method="get">
    Enter Page Number:
    <input type="number" name="page">
    <input type="submit" value="Send">
</form>

<br>

<?php

if (isset($_GET["page"])) {
    echo "Page Number is : " . $_GET["page"];
}
?>

</body>
</html>