<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/Exception.php';
require 'path/to/PHPMailer/PHPMailer.php';
require 'path/to/PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] =="POST") {

    $where = htmlspecialchars($_POST['where']);
    $email = htmlspecialchars($_POST['email']);
    $bug = htmlspecialchars($_POST['bug']);

    $to = 'austin.bwn@hotmail.com';
    $subject = 'Bug Report From ' . $email;
    $message = "I hate Bugs \n";
    $message .= "Email: $email\n\n";
    $message .= "Bug Specific Place: \n$where\n";
    $message .= "Bug Discription \n$bug\n";

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'chasebowen88@gmail.com'; 
        $mail->Password = 'Runbumrun1'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        
        $mail->setFrom($email, 'Bug Reporter');
        $mail->addAddress($to); 

        
        $mail->isHTML(false); 
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo 'Your bug report has been sent successfully.';
    } catch (Exception $e) {
        echo "There was a problem sending your bug report. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>