<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn)
{
	echo "connection ok";
}
else 
{ 
	die ("connection faued beacause".mysqli_connect_error());
}



 ?>