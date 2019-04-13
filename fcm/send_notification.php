<?php

require '../connect_userlist.php';

$sqlS = "SELECT `fcm_token` FROM `login` WHERE `username`='$user' ";
$result=$conn->query($sqlS);
$row = $result->fetch_assoc();
$token=$row["fcm_token"];
$conn->close();

require '../connect.php';

$title="";

?>