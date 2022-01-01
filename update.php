<?php
include ("connection.php") ;
error_reporting (0);
$_GET['pi'];
$_GET['sr'];
$_GET['ds'];
$_GET['ct'];
$_GET['wt'];
$_GET['pt'];
?>
<html>
<head>
</head>
<body   style="background-color:powderblue;">  
	<center>
<form action = "" method = "GET">
Craftid  &ensp; &ensp;<input type = "text" name ="Cargoid" value = "<?php echo $_GET['pi']; ?>"> <br><br>
Source   &ensp; &ensp;<input type = "text" name ="source" value = "<?php echo $_GET['sr']; ?>"><br><br>
Destination<input type = "text" name ="destination" value = "<?php echo $_GET['ds']; ?>"><br><br>
Contents &ensp;&ensp;<input type = "text" name ="contents" value = "<?php echo $_GET['ct']; ?>"><br><br>
Weight&ensp;&ensp;&ensp;&ensp;<input type = "text" name ="weight" value = "<?php echo $_GET['wt']; ?>"> <br><br>
Planetype&ensp;&ensp;<input type = "text" name ="planetype" value = "<?php echo $_GET['pt']; ?>"><br><br>

<input type = "submit" name = "submit" value = "submit"/>



</form>

<?php

if($_GET['submit'])
{
	$plane_id  =$_GET['Cargoid'];
	$source  =$_GET['source'];
	$destination  =$_GET['destination'];
	$content  =$_GET['contents'];
	$weight  =$_GET['weight'];
	$plane_type  =$_GET['planetype'];
	$query = "UPDATE Cargo SET Source='$source' , destination='$destination' , contents='$content' , weight='$weight' , planetype='$plane_type' WHERE Cid='$plane_id'  " ;	
	$data = mysqli_query($conn, $query) ;	
	if ($data)
	{
		echo "<font color='green'>Record Updated Successfully  . <a href='cargodisp.php'> Check Updated list here <a> ";

	}	
	else
	{
		echo "<font color='red'>Record Not Updated " ;
	}
}
else
{
	echo "<font color='red'> Click on Update Button to save the Changes " ;
}
?>
			
</body>
</center>
</html>