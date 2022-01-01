<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<head>
<body style="background-color:powderblue;" >
<center>
<form action = "" method = "GET">
Aircraft id <input type = "text" name ="Cargoid" value = ""  > <br><br>
Source &emsp;   <input type = "text" name ="source" value = ""   ><br><br>
Destination <input type = "text" name ="destination" value = ""><br><br>
Contents  &ensp;   <input type = "text" name ="contents" value = ""><br><br>
Weight &ensp; &ensp;<input type = "text" name ="weight" value = ""> <br><br>
Plane type<input type = "text" name ="planetype" value = ""><br><br>

<input type = "submit" name = "submit" value = "submit"/>



</form>

<?php

if($_GET['submit'])
{


$id = $_GET['Cargoid'];
$sc = $_GET['source'];
$ds =$_GET['destination'];
$cnt=$_GET['contents'];
$wtt=$_GET['weight'];
$pt=$_GET['planetype'];




if ($id !="" && $sc !=""  && $ds !=""  && $cnt !="" && $wtt!= ""&& $pt!="")
{
$query = "INSERT INTO CARGO VALUES ('$id','$sc','$ds','$cnt','$wtt','$pt') " ;

$data = mysqli_query($conn,$query);

if($data)
{
 echo " data inserted in the database ";
}


}
else 
{
	echo "all fields required" ;
}
}
?>	

</center>
</body>
</html>









<!DOCTYPE html>
<html>
   <head>
      <title>HTML Hyperlinks</title>
   </head>

   <body>
     <center>
      <p>
        <a href="https://www.localhost/cargodisp.php">Click here to view data </a> 
        
      </p>
   </body>
</center>
</html>
