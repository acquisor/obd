<?php
date_default_timezone_set("Asia/Kolkata");
if(_GET)
{
	$status=$_GET["status"];
	$customerName=$_GET["customerName"];
	$motorName=$_GET["deviceName"];
	$Cdate=$_GET["cdate"];
	$motorIP=$_GET["IP"];
	$customerWifiSsid = $_GET["customerWifiSsid"];
	$battery=$_GET["btry"];

	if($status=="1")
		$curStatus = "on";
	else if($status=="0")
		$curStatus="off";

	$date=date("Y-m-d");

	$host="172.22.25.3";
	$user="priyen";
	$password="priyen@312";
	$dbname="priyen@watertank";
	
	$conn = new mysqli($host,$user,$password,$dbname);

	$sqlU = "UPDATE `tank_details` SET `motorIP`='$motorIP', `AP_motor`='$customerWifiSsid', `motor_btry`='$battery', `motorStatus`='$status' WHERE `motorName`='$motorName' AND `username`='$customerName'";
	$res=$conn->query($sqlU);
	if($res)
		echo "success_$date\r";
	else
		echo "failed_$date\r";
}