<?php

	session_start();

	$host="172.22.25.3";
	$user="priyen";
	$password="priyen@312";
	$dbname="priyen@watertank";
	
	$conn = new mysqli($host,$user,$password,$dbname);


	if($conn->connect_error)
	{
		echo "Connection to $host failed";
	}

?>