<?php
include 'connection.php';

$sql = "SELECT * FROM result";
$res = mysqli_query($conn, $sql);

if(!$res){
    die("Query Failed : " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Result</title>
</head>

<body>

<h2>Student Result List</h2>

<table border="1" cellpadding="8">

<tr>
<th>Exam No</th>
<th>Name</th>
<th>AOOT</th>
<th>OST</th>
<th>OT</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
if(mysqli_num_rows($res) > 0)
{
    while($row = mysqli_fetch_assoc($res))
    {
?>

<tr>
<td><?php echo $row['ExamNo']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['AOOT']; ?></td>
<td><?php echo $row['OST']; ?></td>
<td><?php echo $row['OT']; ?></td>

<td>
<a href="update.php?id=<?php echo $row['ExamNo']; ?>">Edit</a>
</td>

<td>
<a href="delete.php?id=<?php echo $row['ExamNo']; ?>">Delete</a>
</td>
</tr>

<?php
    }
}
else
{
?>
<tr>
<td colspan="7">No Records Found</td>
</tr>
<?php
}
?>

</table>
<a href="insert.php">Add</a>
</body>
</html>