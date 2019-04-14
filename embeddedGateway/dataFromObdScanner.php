<?php
date_default_timezone_set("Asia/Kolkata");
if($_GET)
{
	$speedFromDev=$_GET["speed"];					//41 0D 33 41 55 55 55 55
	$customerName=$_GET["customerName"];			//priyen
	$rpmFromDev=$_GET["rpm"];						//41 0C 25 11 55 55 55 55 
	$ScannerIpFromDev=$_GET["IP"];					//172.22.xx.xx
	$Cdate=$_GET["cdate"];							//2019-04-14
	$customerWifiSsid = $_GET["customerWifiSsid"];	//priyen1
	$loadFromDev=$_GET["load"];						//41 04 55 33 55 55 55 55 
	$throttleFromDev=$_GET["throttle"];				//41 11 33 66 55 55 55 55

	$today_date=date("Y-m-d");

	$host="172.22.25.3";
	$user="priyen";
	$password="priyen@312";
	$dbname="id9261150_obd";
	
	$conn = new mysqli($host,$user,$password,$dbname);

	$sqlU = "UPDATE `scanner_details` SET `scannerIP`='$ScannerIpFromDev', `scannerWssid`='$customerWifiSsid', WHERE `user`='$customerName'";
	$res=$conn->query($sqlU);
	if($res)
		echo "success_$date\r";
	else
		echo "failed_$date\r";


}