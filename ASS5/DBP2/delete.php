<?php
include 'connection.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM result WHERE ExamNo=$id";

    if(mysqli_query($conn,$sql))
    {
        header("Location: display.php");
        exit();
    }
    else
    {
        echo "Delete Failed : " . mysqli_error($conn);
    }
}
else
{
    echo "Invalid Request";
}
?>