<?php
include 'connection.php';

if (isset($_POST['submit'])) {

    $nm = mysqli_real_escape_string($conn, $_POST['Name']);
    $aoot = $_POST['AOOT'];
    $ost = $_POST['OST'];
    $ot = $_POST['OT'];

    $sql = "INSERT INTO result(Name,AOOT,OST,OT) VALUES('$nm',$aoot,$ost,$ot)";

    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted Successfully";
    } else {
        echo "Insert Failed : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Result</title>
</head>

<body>

<h2>Insert Page</h2>

<form method="post">

<label>Name :</label>
<input type="text" name="Name" placeholder="Enter Name" required><br><br>

<label>AOOT :</label>
<input type="number" name="AOOT" placeholder="Enter AOOT Marks" required><br><br>

<label>OST :</label>
<input type="number" name="OST" placeholder="Enter OST Marks" required><br><br>

<label>OT :</label>
<input type="number" name="OT" placeholder="Enter OT Marks" required><br><br>

<input type="submit" value="Insert" name="submit">

</form>

</body>
</html>