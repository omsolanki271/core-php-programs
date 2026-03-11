<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "delete from IndianTeam where PlayerNo=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: display.php");
}
else
{
    echo "Delete Failed";
}
?>