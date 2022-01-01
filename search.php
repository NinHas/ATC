<html>
<head></head>
<body style="background-color:powderblue;">
	<center>
<?php
require_once "connection2.php";
global $CN;
error_reporting(0);
$F=$_POST["T"];
$sq = "SELECT * FROM CREW WHERE Crewid = $F";
 
$Table =  mysqli_query($CN,$sq);

$row = mysqli_fetch_array($Table);


echo nl2br ("crew id \n");
echo $row["Crewid"];
echo "<br>";

echo nl2br ("air craft id \n");
echo $row["Pcraftid"];
echo "<br>";


echo nl2br("CRID \n");
echo $row["CRID"];
echo "<br>";

echo nl2br("co pilot \n");
echo $row["copilot"];
echo "<br>";



echo nl2br ("flight attendants \n");
echo $row["flightatten"];
echo "<br>";


echo nl2br ("pilot \n");
echo $row["pilot"];
echo "<br>";








?>
</center>
</body>
</html>