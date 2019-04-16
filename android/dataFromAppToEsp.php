<?php

if($_GET)
{
	$speedA=$_GET["speed"];
	$throttleA=$_GET["throttle"];
	$loadA=$_GET["load"];
	$rpmA=$_GET["rpma"];
	$rpmB=$_GET["rpmb"];
	$dtc=$_GET["dtc"];

	$speed = hexdec($speedA);
	$load = (100/255)*(hexdec($loadA));
	$throttle = (100/255)*(hexdec($throttleA));

	$rpmA = hexdec($rpmA);
	$rpmB = hexdec($rpmB);
	$rpm = ((256*$rpmA)+$rpmB)/4;

	echo "Spd: $speed, \tThro: $throttle, \tLoad: $load, \nRPM: $rpm, \tDTC: $dtc";
}

?>