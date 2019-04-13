<?php

require '../connect.php';

$fcm_token=$_POST['fcm_token'];
$user=$_POST['user'];
$sql="UPDATE `login` SET `fcm_token`='$fcm_token' WHERE `username`='$user' ";
$res = $conn->query($sql);

echo "done";

?>