<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$complaintSubj=$_POST["subject"];
$detailcomplaint=$_POST["complaint"];
$username=$_SESSION["username"];

$conn = new mysqli("localhost",'priyen','priyen@312','priyen@watertank');
$sql="SELECT * FROM `login` WHERE `username`='$username'";
$result = $conn->query($sql);


if ($result->num_rows > 0) 
			{
			// output data of each row
				while($row = $result->fetch_assoc()) 
				{	
					$email=$row["email"];
					$mobile=$row["mobile"];
				}
			}
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPSecure = 'tls';	// Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '1505051@ritindia.edu';                 // SMTP username
    $mail->Password = 'shah@10912';                           // SMTP password
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('1505051@ritindia.edu','Water acQuisor');
    $mail->addBCC('priyenshaha@gmail.com', 'Priyen Shah');
	$mail->addBCC('anjalipatil656@gmail.com', 'Anjali Patil');
	$mail->addBCC('shubhamomase123@gmail.com', 'Shubham Omase');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "WaterTank Complaint from $username ";
$mail->Body    = "<h2>A complaint has been registered</h1> <br><br> Complaint from: $username <br><br> Subject: $complaintSubj <br><br> Details: $detailcomplaint <br><br> Customer Contact Details <br><br> Email-ID: $email <br> Mobile number: $mobile <br> ";
    $mail->send();
    
	header('Location: ../monitor1.php');
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>