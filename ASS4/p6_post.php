<!DOCTYPE html>
<html>
<head>
    <title>POST Method Practical</title>
</head>
<body>

<h2>POST Method Example</h2>

<form method="post">
    Enter Page Number:
    <input type="number" name="page">
    <input type="submit" value="Send">
</form>

<br>

<?php

if (isset($_POST["page"])) {
    echo "Page Number is : " . $_POST["page"];
}
?>

</body>
</html>