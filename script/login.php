<?php
session_start();

date_default_timezone_set("Asia/Kolkata");

$datetime = date("Y-m-d H:i:s");
if(isset($_POST))
{
	$username=$_POST['uname'];
	$passwd=$_POST['psw'];
 
	if(($_SESSION["username"]!=$username)&&($username!=null))
	{
		$_SESSION["username"]=$username;
	}

require '../connect.php';

	if($conn->connect_error)
	{
		die("connection failed".$conn->error);
	}

	$query="SELECT * FROM `user` WHERE `username`='$username' and `password`='$passwd'";
	$result = $conn->query($query);
	if ($result->num_rows > 0)
	{
		
		header('Location: ../monitor1.php');
	}
	else
	{
		header('Location: ../login.php');
	}
}
else
{
	echo "No server Req";
}
?>
