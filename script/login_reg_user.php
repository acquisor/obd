<?php
require 'connect.php';
session_start();

if($_POST)
{

	$userFromReq=$_POST['user'];
	$passFromReq=$_POST['pass'];
	$emailFromReq=$_POST['email'];
	$mobileFromReq=$_POST['mob'];
	$name=$_POST['name'];

	$queryUser = "SELECT * from `login` where `username`='$userFromReq';";
	$resultUser = $conn->query($queryUser);
		
	if($resultUser->num_rows>0)
	{
		$queryPass = "select * from `login` where `username`='$userFromReq' and `password`='$passFromReq'";

		$resultPass = $conn->query($queryPass);
		if ($resultPass->num_rows > 0)
		{
			$json['successL'] = ' Welcome '.$userFromReq;
		}
		else
		{
			$json['errorL'] = "Invalid username or Password";
		}
	}
	else
	{

		if(isset($_POST['user'], $_POST['pass'], $_POST['email'], $_POST['mob']))
		{
			$queryI = "insert into `login` (`username`, `password`, `email`, `mobile`) values ('$userFromReq', '$passFromReq', '$emailFromReq', '$mobileFromReq')";

			$resultI = $conn->query($queryI);
			if ($resultI)
			{
				$json['successReg'] = ' Welcome '.$userFromReq;
			}
			else
			{
				$json['errorReg'] = "Account was not created. Try changing username";
			}
				
		}
		else
		{
			$json['errorReg'] = "Please register. Fill all the details.";
		}
	}

	echo json_encode($json);
}

?>