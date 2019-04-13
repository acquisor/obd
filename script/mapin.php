<?php

session_start();

require "connect.php";
	
$status;
$maxlvl = $_POST["maxlevel"];
$minlvl = $_POST["minlevel"];
$name = $_POST["tankname"];
if(isset($_POST["start"]))
{
	$status="on";
}
else if(isset($_POST["stop"]))
{
	$status="off";
}
$sqlU = "UPDATE `tank_details` SET `curStatus`='$status', `maxLevel`='$maxlvl', `minLevel`='$minlvl' WHERE `name`='$name' and `username`='$_SESSION['username']';";
		
$res = $conn->query($sqlU);
$conn->close();		
header('Location: ../monitor1.php');
?>