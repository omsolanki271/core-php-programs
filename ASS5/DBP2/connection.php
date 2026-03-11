<?php

$servername = "localhost";
$uname = "root";
$pw = "";
$db = "MCAExam";

$conn = mysqli_connect($servername,$uname,$pw,$db);

if($conn)
    {   
        echo "Dababase successfully connnect...";
    }   
else
    {   
        echo "Dababase Failed...";
    }

?>