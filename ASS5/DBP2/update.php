<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM result WHERE ExamNo=$id";
$res = mysqli_query($conn, $sql);

if(!$res){
    die("Query Failed : " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($res);

if (isset($_POST['update'])) {

    $nm = $_POST['Name'];
    $aoot = $_POST['AOOT'];
    $ost = $_POST['OST'];
    $ot = $_POST['OT'];

    $update = "UPDATE result 
               SET Name='$nm', AOOT=$aoot, OST=$ost, OT=$ot 
               WHERE ExamNo=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: display.php");
        exit();
    } else {
        echo "Update Failed : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Result</title>
</head>

<body>

<h2>Update Page</h2>

<form method="post">

<label>Name :</label>
<input type="text" name="Name" value="<?php echo $row['Name']; ?>" required><br><br>

<label>AOOT :</label>
<input type="number" name="AOOT" value="<?php echo $row['AOOT']; ?>" required><br><br>

<label>OST :</label>
<input type="number" name="OST" value="<?php echo $row['OST']; ?>" required><br><br>

<label>OT :</label>
<input type="number" name="OT" value="<?php echo $row['OT']; ?>" required><br><br>

<input type="submit" value="Update" name="update">

</form>

</body>
</html>