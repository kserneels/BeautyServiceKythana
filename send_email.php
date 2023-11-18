<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $bericht = $_POST['bericht'];

    // PHPMailer configuration
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'beautyservicekythana@gmail.com';                     //SMTP username
    $mail->Password   = 'sydy xupe clgn mhwo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('beautyservicekythana@gmail.com', 'gmail');
    $mail->addAddress('beautyservicekythana@hotmail.com', 'hotmail');     //Add a recipient
    $mail->addReplyTo('info@example.com', 'Information');
   

     // Content
     $mail->isHTML(true);
     $mail->Subject = 'New Contact Form Submission';
     $mail->Body    = "Voornaam: $voornaam <br> Achternaam: $achternaam <br> Email: $email <br> Telefoonnummer: $telefoonnummer <br> Bericht: $bericht";

     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
}