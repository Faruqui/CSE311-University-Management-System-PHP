<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "university";

$conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname) or die ("could not connect to mysql");

if(mysqli_connect_error())
{
	echo "Failed to connect MYSQL" . mysqli_connect_error();
}
?>