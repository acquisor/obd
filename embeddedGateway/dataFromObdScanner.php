<?php
date_default_timezone_set("Asia/Kolkata");
if($_GET)
{
	$obdData=$_GET["obdData"];					//41 0D 33 41 55 55 55 55
	$customerName=$_GET["customerName"];			//priyen
	$ScannerIpFromDev=$_GET["IP"];					//172.22.xx.xx
	$customerWifiSsid = $_GET["customerWifiSsid"];	//priyen1

	$today_date=date("Y-m-d");

	$host="172.22.25.3";
	$user="priyen";
	$password="priyen@312";
	$dbname="id9261150_obd";
	
	$conn = new mysqli($host,$user,$password,$dbname);

	$sqlU = "UPDATE `scanner_details` SET `scannerIP`='$ScannerIpFromDev', `scannerWssid`='$customerWifiSsid', WHERE `user`='$customerName'";
	$res=$conn->query($sqlU);
	if($res)
		echo "success";
	else
		echo "failed";


}