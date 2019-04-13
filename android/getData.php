<?php
session_start();
	if($_GET)
	{
		
		$host="172.22.25.3";
		$user="priyen";
		$password="priyen@312";
		$dbname="priyen@watertank";
		
		$conn = new mysqli($host,$user,$password,$dbname);

		if($conn->connect_error)
		{
			echo "Connection to $host failed";
		}

		$json = array();
		
		$tname = $_GET["name"];

		$sqlS = "SELECT * from `tank_details` where `name`='$tname' AND `username`='".$_SESSION['username']."'";
		$result = $conn->query($sqlS);
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{	
			$json["curLevel"]=$row["curLevel"];
			$json["curStatus"]=$row["curStatus"];
			$json["battery"]=$row["battery"];
		}
		echo json_encode($json);
	}
	else
		echo "database error";
	}
	else
		echo "Select a tank";
?>