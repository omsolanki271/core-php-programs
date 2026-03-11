<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $nm = $_POST['Name'];
    $rn = $_POST['Runs'];
    $wk = $_POST['Wickets'];
    $ct = $_POST['Catches'];

    $sql = "insert into IndianTeam(Name,Runs,Wickets,Catches)
            values('$nm',$rn,$wk,$ct)";

    if(mysqli_query($conn,$sql))
    {
        echo "Player Inserted Successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Player</h2>

<form method="post">

Name :
<input type="text" name="Name"><br><br>

Runs :
<input type="number" name="Runs"><br><br>

Wickets :
<input type="number" name="Wickets"><br><br>

Catches :
<input type="number" name="Catches"><br><br>

<input type="submit" name="submit" value="Insert">

</form>

<br>
<a href="display.php">View Players</a>

</body>
</html>