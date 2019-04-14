<?php

	session_start();

	$host="172.22.25.3";
	$user="priyen";
	$password="priyen@312";
	$dbname="id9261150_obd";
	
	$conn = new mysqli($host,$user,$password,$dbname);


	if($conn->connect_error)
	{
		echo "Connection to $host failed";
	}

?>