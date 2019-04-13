<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$desc=$_POST["desc"];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	
	//Server settings

    $mail->SMTPSecure = 'tls';	// Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '1505051@ritindia.edu';                 // SMTP username
    $mail->Password = 'shah@10912';                           // SMTP password
                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('1505051@ritindia.edu','SpaterTech WaterTank');
   // $mail->addBCC('anjalipatil656@gmail.com', 'Anjali Patil');     // Add a recipient
    $mail->addBCC('priyenshaha@gmail.com', 'Priyen Shah');
	$mail->addBCC("$email");
   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Enquiry for WaterTank by $name";
    $mail->Body    = "<h2>Enquiry email<br>Customer Details: </h2> <br> Name: $name<br><br> Mobile: $mobile <br><br> Email: $email <br><br> Description: $desc";
    

    $mail->send();
    echo '<br><br><center>Your Enquiry has been received.<br><br> We will get back to you shortly.<br><br> Please check your email for a copy of this enquiry';
	echo '<br><br> Visit to <a href = "../contactHome.php">Contact Page</a> for other Contact details. <br><br> OR Go to <a href = "../index.html"> Home page </a> for product details</center>';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>