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
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "94102a769391a2";
    $mail->Password = "1147523ffe8165";
    $mail->SetFrom("example@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            td {
                padding: 0%;
                margin: 0%;
            }
            
            p {
                font-size: 1.5em;
                margin: 0%;
                padding: 5px;
            }
        </style>
    </head>
    
    <body style="background-color:rgb(171, 171, 171) ;">
        <table style="width:80% ; margin:auto;">
            <tbody>
    
                <tr>
                    <td>
                        <table style="margin:auto;">
                            <tbody>
    
                                <tr>
                                    <td>
                                        <h2>Lorem ipsum dolor sit.</h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="margin:0%;">
                        <table style="width:90% ; margin:auto; background-color: rgb(250, 250, 240); padding: 20px;">
                            <tbody>
                                <tr>
                                    <td>
                                        <h1>Hello</h1>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing eLorem ipsum dolor sit amet consectetur adipisicing elit. Illo hic ipsa ullam? Sed in laudantium rem obcaecati veritatis nisi a.</p>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; padding-top: 25px;">
                                        <button style=" background-color:black; padding:8px; font-size:1.5em;  font-weight: bold; border-radius:9px; color:white ">Go to the site</button>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Thank you for using our application</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Loreipsum.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>lorenloremqwweic</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et odio voluptates, asperiores facilis vitae fugiat mollitia dolor, eveniet quas ad repudiandae iure
                                            <a href="#">explicabo commodi doloremque.</a>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="margin:auto; margin-top: 20px;">
                            <tbody>
    
                                <tr>
                                    <td>
                                        <a herf="#" style=" text-align:center; font-size: medium; text-emphasis: none; color: rgb(114, 114, 197); ">Lorem ipsum dolor sit.Lorem ipsum dolor sit.
                                            </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    
    </body>
    
    </html>
    <!-- </html>cellpadding="4" cellspacing="5"> -->';
    $mail->AddAddress("email@gmail.com");

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
