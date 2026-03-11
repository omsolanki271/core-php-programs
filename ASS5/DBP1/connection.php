<?php

$servername = "localhost";
$uname = "root";
$pw = "";
$db = "T20WorldCup2026";

$conn = mysqli_connect($servername,$uname,$pw,$db);

if(!$conn)
{
    die("Database Connection Failed");
}

?>