<?php

if($_POST)
{
	$name=$_POST['name'];
	$username=$_POST['username'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];

	if("$pass1"=="$pass2")
	{

		require '../connect.php';
		if($conn->connect_error)
		{
			die("connection failed".$conn->error);
		}
		
		$query ="INSERT into `login` (`fullname`, `username`, `password`, `mobile`, `email`) VALUES ('$name', '$username', '$pass1', '$mobile', '$email');";


		$result = $conn->query($query);

	
		if ($result) 
		{
			echo "done";
		}
		else
		{
			echo "Try other username";
		}
	}
	else
	{
		echo "Your passwords dont match";
	}
}
else
{
	echo "Please enter all the fields";
}
?>