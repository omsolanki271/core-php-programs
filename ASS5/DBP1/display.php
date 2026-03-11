<?php
include 'connection.php';

$sql = "select * from IndianTeam";
$res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<body>

<h2>Indian Team</h2>

<table border="1">

<tr>
<th>No</th>
<th>Name</th>
<th>Runs</th>
<th>Wickets</th>
<th>Catches</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($res))
{
?>

<tr>

<td><?php echo $row['PlayerNo']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Runs']; ?></td>
<td><?php echo $row['Wickets']; ?></td>
<td><?php echo $row['Catches']; ?></td>

<td>
<a href="update.php?id=<?php echo $row['PlayerNo']; ?>">Edit</a>
</td>

<td>
<a href="delete.php?id=<?php echo $row['PlayerNo']; ?>">Delete</a>
</td>

</tr>

<?php
}
?>

</table>

<br>
<a href="insert.php">Add Player</a>

</body>
</html>