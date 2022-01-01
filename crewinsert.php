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
Crew id  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="Crewid" value = ""> <br><br>
Air craft id  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="pcraft" value = ""><br><br>
CRID  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="crid" value = ""><br><br>
Passenger aircraft id <input type = "text" name ="pcid" value = ""><br><br>
Co-Pilot&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="cop" value = ""><br><br>


flight attendants&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="fla" value = ""><br><br>
Pilot&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="pilot" value = ""><br><br>



<input type = "submit" name = "submit" value = "submit"/>



</form>

<?php

if($_GET['submit'])
{


$sc= $_GET['Crewid'];
$ds=$_GET['pcraft'];
$lf=$_GET['crid'];
$picd=$_GET['pcid'];
$coop=$_GET['cop'];
$hno= $_GET['fla'];











if ($sc !="" && $ds !=""  && $lf !=""  && $picd !="" && $coop!="" && $hno!="" )
{
$query = "INSERT INTO CREW VALUES ('$sc','$ds','$lf','$pcid', '$coop','$hno') " ;

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

</body>
</center>
</html>









<!DOCTYPE html>
<html>
   <head>
      <title>HTML Hyperlinks</title>
   </head>

   <body>
     <center>
      <p>
        <a href="http://localhost/search.html">Click here to search data </a> 
        
      </p>
   </body>
   <center>
</html>
