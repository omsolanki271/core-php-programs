<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "select * from IndianTeam where PlayerNo=$id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);

if(isset($_POST['update']))
{
    $nm = $_POST['Name'];
    $rn = $_POST['Runs'];
    $wk = $_POST['Wickets'];
    $ct = $_POST['Catches'];

    $up = "update IndianTeam 
           set Name='$nm',Runs=$rn,Wickets=$wk,Catches=$ct
           where PlayerNo=$id";

    if(mysqli_query($conn,$up))
    {
        header("Location: display.php");
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Update Player</h2>

<form method="post">

Name :
<input type="text" name="Name" value="<?php echo $row['Name']; ?>"><br><br>

Runs :
<input type="number" name="Runs" value="<?php echo $row['Runs']; ?>"><br><br>

Wickets :
<input type="number" name="Wickets" value="<?php echo $row['Wickets']; ?>"><br><br>

Catches :
<input type="number" name="Catches" value="<?php echo $row['Catches']; ?>"><br><br>

<input type="submit" name="update" value="Update">

</form>

</body>
</html>