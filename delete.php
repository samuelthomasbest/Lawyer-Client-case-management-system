<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "lccmsdb";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

//getting id of the data from url
$id = $_GET['del'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM clientcase WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:manage case.php");
?>

