<?php
date_default_timezone_set("Asia/Kolkata");
if($_GET)
{
	$speedData=$_GET["speedData"];						//41-0D-33-41-55-55-55-55 || 43-06-54-41-61-81-60 P0654, C0161, B0160
	$rpmData=$_GET["rpmData"];
	$dtcData=$_GET["dtcData"];
	$loadData=$_GET["loadData"];
	$throttleData=$_GET["throttleData"];

	$customerName=$_GET["customerName"];			//priyen
	$ScannerIpFromDev=$_GET["IP"];					//172.22.xx.xx
	$customerWifiSsid = $_GET["customerWifiSsid"];	//priyen1

	$date=date("Y-m-d");
	$time=date("H:i:s");

	$host="172.22.25.3";
	$user="priyen";
	$password="priyen@312";
	$dbname="id9261150_obd";
	
	$conn = new mysqli($host,$user,$password,$dbname);

	$sqlU = "UPDATE `scanner_details` SET `scannerIP`='$ScannerIpFromDev', `scannerWssid`='$customerWifiSsid' WHERE `user`='$customerName'";
	$res=$conn->query($sqlU);
	if($res)
		echo "success scanner $time $date <br>";
	else
		echo "failed";

	list($ackMode, $PID, $speedA) = explode('-', $speedData);
	list($ackMode, $PID, $rpmA, $rpmB) = explode('-', $rpmData);
	list($ackMode, $PID, $loadA) = explode('-', $loadData);
	list($ackMode, $PID, $throttleA) = explode('-', $throttleData);


	$speed = hexdec($speedA);
	$load = (100/255)*(hexdec($loadA));
	$throttle = (100/255)*(hexdec($throttleA));

	$rpmA = hexdec($rpmA);
	$rpmB = hexdec($rpmB);
	$rpm = ((256*$rpmA)+$rpmB)/4;

	echo "Speed: $speed <br> RPM: $rpm <br> Engine Load : $load <br> Throttle: $throttle <br>";
	$sqlI = "INSERT INTO `obd_log` (`time`, `date`, `user`, `rpm`, `speed`, `engineload`, `throttle`) VALUES ('$time', '$date', '$customerName', '$rpm', '$speed', '$load', '$throttle')";
	$res=$conn->query($sqlI);
	if($res)
		echo "success - Data updated";
	else
		echo "fail - Data not updated";


	list($ackMode, $dtc1a, $dtc1b, $dtc2a, $dtc2b, $dtc3a, $dtc3b)=explode('-',$dtcData);

	$dtc1="$dtc1a$dtc1b";
	$dtc2="$dtc2a$dtc2b";
	$dtc3="$dtc3a$dtc3b";

	$dtcTypes = array(
	    0 => "P0",
	    4 => "C0",
	    8 => "B0",
	    "C" => "U0"
	);

	$dtc1Type=$dtcTypes[(int)($dtc1/1000)];
	$dtc1Body=$dtc1%1000;
	$dtc1String = $dtc1Type.$dtc1Body;

	$dtc2Type=$dtcTypes[(int)($dtc2/1000)];
	$dtc2Body=$dtc2%1000;
	$dtc2String = $dtc2Type.$dtc2Body;

	$dtc3Type=$dtcTypes[(int)($dtc3/1000)];
	$dtc3Body=$dtc3%1000;
	$dtc3String = $dtc3Type.$dtc3Body;

	$sqlI1 = "INSERT INTO `dtc_log` (`user`, `code`, `status`) VALUES ('$customerName', '$dtc1String', 'pending')";
	$sqlI2 = "INSERT INTO `dtc_log` (`user`, `code`, `status`) VALUES ('$customerName', '$dtc2String', 'pending')";
	$sqlI3 = "INSERT INTO `dtc_log` (`user`, `code`, `status`) VALUES ('$customerName', '$dtc3String', 'pending')";

	$res = $conn->query($sqlI1);
	$res = $conn->query($sqlI2);
	$res = $conn->query($sqlI3);


}