<?php

include("connection.php");

$query = "INSERT INTO STUDENT VALUES ('6','Bc','CS') " ;

$data = mysqli_query($conn,$query);

if($data)
{
 echo " data inserted in the database ";
}

?>