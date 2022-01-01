<?php
$Sname = "localhost";
$Uname = "root";
$Pass = "";
$DBname = "project";

$CN = mysqli_connect($Sname,$Uname,$Pass);

if (!$CN)
{
	echo ("failed");
	die();
}

$db = mysqli_select_db($CN,$DBname);

if(! $DBname)
{
	echo ("failed");
	die();
}

echo ("");





?>