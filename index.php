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
    $mail->Username = "94b43a13045ef2";
    $mail->Password = "ad15f2b61d68b1";
    $mail->SetFrom("shoaibahmad6342@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gmail work work</title>
        <style>
            * {
                margin: 0%;
                padding: 0%;
            }
            
            @media screen and (min-width: 800px) {
                .mein {
                    background-color: rgb(123, 121, 121);
                    padding: 40px;
                }
                .body_mein {
                    background-color: white;
                    width: 50%;
                    margin: auto;
                    box-shadow: 2px 2px 2px 2px rgb(108, 105, 105);
                    padding: 20px;
                    margin-top: 35px;
                    margin-bottom: 35px;
                }
                .body_mein div {
                    margin: 15px;
                }
            }
            
            @media screen and (max-width: 799px) {
                .mein {
                    background-color: rgb(123, 121, 121);
                    padding: 10px;
                }
                .body_mein {
                    background-color: white;
                    width: 75%;
                    margin: auto;
                    padding: 15px;
                    margin-top: 35px;
                    margin-bottom: 35px;
                }
            }
            
            @media screen and (max-width: 500px) {
                .mein {
                    background-color: white;
                    padding: 10px;
                }
                .body_mein {
                    background-color: white;
                    width: auto;
                    margin-top: 35px;
                    margin-bottom: 35px;
                }
            }
            
            .mein header {
                text-align: center;
            }
            
            .body_mein div p {
                margin: 5px;
            }
            /* cssparagraph */
            
            p {
                font-family: "Lato", sans-serif;
                color: #333333;
                margin-top: 5px;
                margin-bottom: 5px;
                line-height: 25px;
            }
            
            div {
                line-height: 50px;
            }
            
            hr {
                margin-top: 30px;
                margin-bottom: 30px;
            }
            /* button csscustom */
            
            .div_btn {
                text-align: center;
                padding-top: 20px;
                padding-bottom: 20px;
            }
            
            .button {
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
            }
            
            .button5 {
                background-color: #555555;
                color: rgb(246, 246, 246);
                border-radius: 5px;
            }
            
            .button5:hover {
                background-color: white;
                color: rgb(10, 8, 8);
                border: 2px solid black;
            }
            /* footer copy right text css */
            
            .footer {
                text-align: center;
                margin-top: 20px;
            }
            
            a {
                text-decoration: none;
                font-family: "Lato", sans-serif;
                color: #094ea1;
                margin-top: 5px;
                margin-bottom: 5px;
                line-height: 10px;
            }
            
            .footer a {
                text-decoration: none;
                color: rgb(69, 55, 55);
                font-family: "Lato", sans-serif;
                line-height: 10px;
            }
        </style>
    </head>
    
    <body>
        <div class="mein">
            <header>
                <h3>Lorepsumdolor sit.</h3>
            </header>
            <div class="body_mein">
                <div>
                    <h1>Hello!</h1>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis fugit provident error rerum necessitatibus omnis in ab vel. Asperiores, dolorum!</p>
                </div>
                <div class="div_btn">
                    <button class="button button5">Go to our site</button>
                </div>
                <div>
                    <p>Thank you for using Application</p>
                    <p>Regrads</p>
                    <p>inmijhret-lavarel</p>
                </div>
                <div>
                    <hr>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut omnis exercitationem dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, beatae! Minima quis vero voluptates quos.!
                        <a href="#">porro molestiae ducimus</a>
                    </p>
                </div>
            </div>
            <div class="footer">
                <a href="#">02022 @ Lorem ipsum dolor sit amet consectetur adipisi cing.adipisic ingadipi sicing</a>
            </div>
        </div>
    
    </body>
    
    </html>
    
    </html>';
    $mail->AddAddress("email@gmail.com");

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
