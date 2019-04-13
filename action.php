<?php
	require "connect.php";
	$lat = $_POST["latitude"];
	$lng = $_POST["longitude"];
	$sr = $_POST["sr"];
	
	echo "From action.php Lat: $lat, Lng: $lng";
	$sql = "UPDATE `tank_details` SET `latitude`= '$lat', `longitude`= '$lng' WHERE `sr`= '$sr'" ;
	$result = $conn->query($sql);
?>