<?php
session_start();
if($_GET)
{
	if($_GET["Yes"])
	{
		session_unset();
		session_destroy();
		header('Location: index.html');
	}

else
{
	header('Location: monitor1.php');
}
}
?>
