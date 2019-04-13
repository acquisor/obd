<?php
date_default_timezone_set("Asia/Kolkata");
if(_GET)
{
	$level = $_GET["level"];
	$height1 = $_GET["height"];
	$customerName = $_GET["customerName"];
	$tankName = $_GET["deviceName"];
	$IP = $_GET["IP"];
	$customerWifiSsid = $_GET["customerWifiSsid"];
	$battery=$_GET["btry"];
	$curDate = $_GET["cdate"];
	$status = $_GET["status"];

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
	if($curDate!=$date)
	{
		$sqlI = "INSERT INTO `consumption` (`date`, `name`, `username`) VALUES ('$date', '$tankName','$customerName');";
		$result = $conn->query($sqlI);
	}

	$sqlS = "SELECT `height`, `curStatus`,`maxLevel`,`minLevel`, `startTime`, `stopTime`, `motorIP` from `tank_details` where `name`='$tankName' and `username`='$customerName'";
	//echo $sqlS;
	$result = $conn->query($sqlS);
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{	
			$height=$row["height"];
			$maxLevel=$row["maxLevel"];
			$minLevel=$row["minLevel"];
			$curStatus=$row["curStatus"];
			$startTime=new DateTime($row["startTime"]);
			$stopTime=new DateTime($row["stopTime"]);
			$motorIP=$row["motorIP"];
		} 
	}
	else
		echo "Error-TankNotFound_$date\r";

	if($height1!=$height && isset($height1))
	{
		$height = $height1;
	}

	if($level>=$height)
	{
		$dell=0;
	}
	else if($level<=18)//blind spot of ultrasonic
	{
		$dell=$level;
	}

	$per = (int)((($height-($level-$dell))/$height)*100);

	if($per<=0)
		$per=0;
	else if($per>=100)
		$per=100;
	

	$sqlU = "UPDATE `tank_details` SET `height`= '$height', `ipaddress`='$IP', `curLevel`='$per',`battery`='$battery', `Wssid`='$customerWifiSsid' WHERE `name`='$tankName' AND `username`='$customerName';";
	$res=$conn->query($sqlU);
	if($per>=$maxLevel)
	{
		echo "stop_$date\r";
		if($curStatus!="off")
		{
			$curStatus="off";
			$stopTime = new DateTime(date("Y-m-d H:i:s"));
			$stime = $stopTime->format("Y-m-d H:i:s");
			$motorStatus = file_get_contents('http://$motorIP/switch?stat=$curStatus');
			$sqlU = "UPDATE `tank_details` SET `stopTime`='$stime', `ipaddress`='$IP', `curStatus`='$curStatus', `motorStatus`='$motorStatus' WHERE `name`='$tankName' AND `username`='$customerName';";
			
		}

	}
	else if($per<=$minLevel)
	{
		
		echo "start_$date\r";
		if($curStatus!="on")
		{
			$curStatus="on";
			$startTime = new DateTime(date("Y-m-d H:i:s"));
			$stime = $startTime->format("Y-m-d H:i:s");
			$motorStatus = file_get_contents('http://$motorIP/switch?stat=$curStatus');
			$sqlU ="UPDATE `tank_details` SET `startTime`='$stime', `curStatus`='$curStatus', `motorStatus`='$motorStatus' WHERE `name`='$tankName' AND `username`='$customerName';";
		}
	}
	else
	{
		if($curStatus=="on")
			echo "start_$date\r";
		else if($curStatus=="off")
			echo "stop_$date\r";
	}
	
	$res=$conn->query($sqlU);


	$sqlS="SELECT `maxFill`,`minFill` from `consumption` where `date`='$date' AND `name`='$tankName' AND `username`='$customerName'";
	$result=$conn->query($sqlS);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{	
			$maxFill=$row["maxFill"];
			$minFill=$row["minFill"];
		}
	}
	else
		echo "Error-NoConsumptionData_$date\r";

	if(!is_null($startTime))
	{
			$now = new DateTime(date("Y-m-d H:i:s"));
			$elapsed = $now->diff($startTime);
			$elapsedString=$elapsed->format("%H:%i:%s");
			$sqlU = "UPDATE `consumption` SET `duration`='$elapsedString' WHERE `date`='$date' AND `name`='$tankName' AND `username`='$customerName';";
			$res=$conn->query($sqlU);	
	}
	if(!is_null($stopTime))
	{
		$dur = $stopTime->diff($startTime);
		$duration = $dur->format("%H:%i:%s");
		$sqlU = "UPDATE `consumption` SET `duration`='$duration' WHERE `date`='$date' AND `name`='$tankName' AND `username`='$customerName';";
		$res=$conn->query($sqlU);
	}

    if($per>=$maxFill)
    {
    	$maxFill = $per;
    }
    if($per<=$minFill)
    {
    	$minFill = $per;
    }

	$used = $maxFill-$minFill;
	

	$sqlU = "UPDATE `consumption` SET `maxFill`='$maxFill', `minFill`='$minFill', `used`='$used' WHERE `date`='$date' AND `name`='$tankName' AND `username`='$customerName';";
	$res=$conn->query($sqlU);

}

?>