<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

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
    $mail->setFrom('1505051@ritindia.edu','SpäterTech WaterTank');
    $mail->addBCC('anjalipatil656@gmail.com', 'Anjali Patil');     // Add a recipient
    $mail->addBCC('priyenshaha@gmail.com', 'Priyen Shah');
   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Water Tank Update';
    $mail->Body    = '<h2></h1><br>';
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>