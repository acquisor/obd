<?php

$dbhost = "172.22.25.3";
$dbuser = "priyen";
$dbpass = "priyen@312";
$dbname = "priyen@watertank";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

?>