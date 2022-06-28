<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.mailtrap.io";
    $mail->Port = 2525; // or 587
    $mail->IsHTML(true);
    $mail->Username = "a4d93d43928c51";
    $mail->Password = "1a06caedefb06c";
    $mail->SetFrom("shoaibahmad6342@gmail.com");
    $mail->Subject = "Test";
    $content = file_get_contents('gmailtemplate/email-responsers/email_template.html');
    $mail->Body = $content;
    $mail->AddAddress("email@gmail.com");

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
