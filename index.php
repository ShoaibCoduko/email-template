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
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gmail</title>
        <style>
            @media only screen and (max-width: 2200px) {
                * {
                    padding: 0%;
                    margin: 0%;
                    border: 0%;
                }
                body {
                    background-color: rgb(184, 183, 187);
                    width: auto;
                }
                .header_section {
                    margin: auto;
                    width: 40%;
                    background-color: #ffff;
                    padding-left: 25px;
                    padding-right: 25px;
                }
            }
            
            @media only screen and (max-width: 600px) {
                * {
                    padding: 0%;
                    margin: 0%;
                    border: 0%;
                }
                body {
                    background-color: rgb(14, 51, 5);
                    width: auto;
                }
                .header_section {
                    margin: auto;
                    width: auto;
                    background-color: rgb(105, 41, 38);
                    padding-left: 25px;
                    padding-right: 25px;
                }
            }
            
            #para_1 p {
                font-size: 20px;
                color: grey;
                font-weight: 400;
                line-height: 30px;
                line-break: auto;
            }
            
            #heading h1 {
                font-size: 30px;
                color: rgb(23, 26, 26);
                font-weight: bold;
            }
        </style>
    </head>
    
    <body>
        <div class="header_section">
            <header style="justify-content:space-between;">
                <div id="logo" style="display:inline-block;  margin: 5px;">
                    <a href="#">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEhISEBAVERUQFRYVEBAVEBMVFRYYFhEZFhUXFRMYHSggGBslHhYXITIhJSkrMC4uFx8zODMtQygtLysBCgoKDg0OGxAQGy0lICU3MS0tKy0tLS0tLS8tLS0tLzUtLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYCAwcBBP/EAEwQAAIBAgEIBAkHCQUJAAAAAAABAgMRBAUGEiExQVFhBzJxsxMiNHOBkaGxshQ1UmJygvAWI0JDU5LB0eEVJDNUg0Rkk6LCw9Li8f/EABoBAQADAQEBAAAAAAAAAAAAAAADBAUCBgH/xAA2EQABAwICBgkEAgIDAQAAAAAAAQIDBBEhQQUSMVFx8BMyM2GBkbHB0RQicqEjUkPxNEKCBv/aAAwDAQACEQMRAD8A7OAD4dAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwPoRbgAHw+gAAAAAAAAAA8bS2g+HoAAAAAAAAAAAAAAAAAAAAAAAAAAAAABA555UnhsM5UnoznJU4Ssno3Tk5JPelF252J4qXSXf5NTt+3j3VQ4lVUYqoWKRiPnY12y5QKeNrRl4SNaop3vp+Ek5X53evseovubecyxNqdVqFbclqjU1bYcH9X1XOdQkmZtezWmtTTWxp7mUI5XMU9FU0kc7bOwXJUy+U7jsl3xfrPLvi/WU7NrOu+jRxMrPUo1nqUuCqbtL62x8t9wNFkiPS7TzM8D4Xar0+F4c9x7d8X6xd8X6zwHdyE9u+L9Yu+L9Z4BcHt3xfrF3xfrPCuZy5zRw96VG0636T2xp/a4y+r67b+HvRqXUkhhfK7VYl152n25fy/DCRt16kleFJS/wCaT/Rj79xzrKGLqYibnWlpSey/VS4Rjsivw7mqpOUm5Tk5Sk7ynJ3bfFs1ykltM6WVX8D01JRtp0wxdv8AjcnrnuL90d5UqT8Jh6knNU0p0m3dqN9GUbvW0nZq/F8i6nNui6rpYjEcFSVv+IjpJdgVVjS5iaQa1tQ5G93nYAAlKQNeIrxpxc5yUYxV5SbskbDm2dmWpYqr4Om26dOVoRX6cr20rb+C/qWqSmdUP1UwTNdxDPMkTb55EllTPl3ccNTSS/WTTu+yG70+oifytxt7+GXZ4Onb3FhyFmdThFSxK8JN6/B38SPJ26z9hYlkyhbR8BStw8FD+RdWoool1WR63etvdF9kKyRVD8XPt3FPydnxUTSxFNTX04eLJfdep+wuWBxtOtBVKUlKMtjXua3PkV/LeZ1GpFyw6VKa2RXUlyt+j2r1GWZORqmHhKdXSi6tvzL2RS2OS+l/AiqEpZIukj+139ednFFsdxLM1+o/FN5ZgAZpcAAAAAAAAAPTG55UvZ6O2zt221HLs3q1b5ZSacnUlUSq3vdq/wCcUvRfssW6alWdr3IttVL8dvwQSzdGrUttOqFR6SfJqXn13VQhsg1ZPKaWlJrwlXVpO3VluJrpK8mpefXdVDNe/Wicpa0VN0s7VtbGxzSpF9Zbff2myE721Wvx7Wrrirp+oyLPk/JcK2Ep6S1pz8ZdaL8JLWn71vKccavVUQ9RU1KQNRzkwVbcMFXx2bP9FYaLJm3nPKjalXbdPZGprcqfa9soe1c1sgcZg50ZaM9+ya6r7OD5Gk+Nc6N3efXxxVEdlxRdi+6LzuVDsFOaklKLUlJXjJO6aexp70ZHNM38v1MK7NOdFu8qd9cb7ZU+D4rY+W06LgsZTrwVSlJTjLY17U1ua4M0I5kk4nnKujfTuxxTJfZdy8opuBjVqRhFyk1FRTcpN2SS2tvcULOXOeVe9Kg3CnslLWpVOXGMOW177bH9kkRiXU4pqV9Q6zdma5JzkmZ92cudXWo4WXKpXW7jGnz+tu3cqcl+P5vieJGzD0J1JKFOOlJ7tyXGT3Iz3vdIt1PTQQR07LNwTaqr6rzgYPckm29iSu32IjqtZy17txesJkqFCnN9ebi9KduWyPBe/eUCOxdi9x06JWIlyGKsbNrIzYlsd9/RNxeeib/HxHml3h045j0Tf4+I80u8OnFyHqGLXduvh6AAEpTIrOjGOjhqsk7NrQi+c3o3XYm36CqZg5OU6sqsldUElD7ct/oSfrRM9Icv7vFcaiv+5M96PoJYab+lVlf0RijVjXo6Fzk2uW3tzxKT01qlEXJLlmAIrL+XI4NQcqbn4RtKzStZLj2mbGxz3I1qXVS45yNS67CVBUfy8p/5ef78DH8vKf8Al5/vxLP0FR/Rf18kP1UX9i2160YK85Rir2vKSirvYrsyclxOcZ65UWKo4apGLjFyrXg2nri4K/qftMM2c53StSrvSp6lCptcOT4x9q92e+To5VjellQ046F0tOk0a3vl57N+zZ5HSrntyPhJNJpppq6ad009jTMMTXhTi51JKMYq8pPYiXvKVyRlUSTbaSWtttJLtZ5RrRmlKElOL2Si00+xo5ZnLnHLE3jG8KS3bHLnPlwj+FYujzEy+RVpRi5ONaWjH/Sp7vTcr/UNuu5EvfhuL8tC+KJHvWyqqJbjvXZ8FyqVIx1yaXa7GFPEQl1Zxl2STK5RoVcRJva98m9S/HA2YnJVSmtLrJbXG+rmY6aYqHtWWOBVjTO+Nud1zn6aNF1XP+4shrp4aCk5qEVKXWmopSfbLaz4MiY5zvCbu46097WzX+N5TM3Jv+0Urvr1t7+jM9Do/UrYXTMXBEvbzwW3DvKNQqwvaxybVsYZA+c4+cq/DInOkvyal59d1UITIHzlHzlX4ZE30l+TUvPruqhT/wAbudx80H2qfkvoc7L3mt5LS+93kiiF7zX8lpfe7yRHS9deB6PS3YJ+SejjLKeAhNNSjeMtq4PdbhyZTsp5OlRf0oN+LLhynwfPYzobV9RGYzD2umrxlx1p8mWpYkehkUlY+nXDFuafG5fXO5Qz7ck5Uq4WenSep9em+rLt4PhJe3YbcqZJdO86d5R3ra4dnGPtRGJmeqOjduU9Ix8dRHdMUXmypzkqKS2X8vVMW7O9OlF3jTve741Gus+Wxe0igffknJU67u/FprbLe+UP57uY+6R3fz+h/FTx7mpzxVV8z58n4GpXk409SXWm+rH+b5e4t+BwMKEdGC29aT60nxb/AIbjdhsPCnFQhFRiti97fF8zNl+KFGY5nnqyudOuqmDd3z7JsTjiacT1J/ZfuZzCOxdi9x0/FdSf2X8JzCOxdi9xHU5FnRfVf4e5eeibyjEeaXeHTjmPRN5RiPNLvDpx3B1CtXduvh6AAExTK5n9R0sLpfs6kZPsd4/9SPl6O8QnSq098JqXolG3viyy5RwirUp0pbKkXG/C+x+h2foObZGx08DiX4RNaLcK8eV9qW+zSa/qatMnT0r4U6yLdOfNPEozL0c7ZF2LgdRI3LORqWLUFVcloNtaLS2226uR99GrGcVKElKMleMk7prijMzWPcx2s1bKhdc1HJZdhWvyIwv0qn78f/EgM7ch0MJGl4NzcqjldSkn4sUr2slvaOiSklrepLa9xzHOfKTxeItT8aMbU6K+k3Lau1+xI1NHyzyzfc9dVMVx8ue4o1TI2R4NS67D58qQthMH9aWIa7NOC/gfVi8hKpQo1adlPwVPSW6X5tbeD5/hfXn3hVRpYKmv1cKkW+LtTu/Xclskr+70PNU/gRiTK2aokcuxVv5m8x74KOBWLZUun7zKrkHL9TCN06ilKnfxofpQfGF/dse3t1ZWypXx1RRSain4lNPUvrTe98927nOZZyGqutan+jP+EuKM8n5PhQjaOtvrTe2X8lyIehf1FX7Sf62BP5ms/kXyTv5x87kHlTJcaGEqt+NN6HjW2fnY6o8F7yydFfklXz8u5pkXnP5LV+53sTZmPWccBUS1aWJkn2eBg37jmeRtMiyWwa1VIkV88C6y4q725wLhVyvSg2oR0tetqyV+3eYwy5B6pQaXG6l7DRkjJ8Zx0561sjHdq2tkjUybRkraCXNamZ1O7Sc7Ema5jUXFGqmWWNlXHiQvSnYqtVFW21bkRkhpV1o7HpJdmu38CtZtfOK85W+GZZMlJKvFJ3ScrPirMrWbfzkvOVvhmav/AMn/AMOo/wDXDZl3FTSvbxeHqeZA+c4+dq/DInOkvyal59d1UITIHzmvOVfhkTfSX5NS8+u6qHP+N3O440H2qfkvoc7L3mt5LT+93kiiF8zW8mpff7yRHS9deHwej0t2Cfkno4kzypBSVmegvnnSKrUnF2fofEr+Vcj7Z0VzlS3PnDg+W8uVekpKz9D4HxRw7i/GVmtxw9jXpZSaCofA7WYvwvHnAq+RshupadZOMfoO6lPt3xj7Xy32qEUkkkkkrJJWSXBIyZ4I42sTA7qap87ru2ZJknOa5nhizIxZ2VjTiupP7L+E5hHYuxe46fiupP7L+E5hHYuxe4q1ORr6L6r/AA9y89E3lGI80u8OnHMeibyjEeaXeHTjuDqFau7dfD0AAJimCs525ufKPztFfnYq0o7PCJc/pL+hZgSxSuiej2bTiSNHt1VOWZLy3icG3CL1J+NRmnZPfq2xZOLP2VteGV/PO3wlqyhkqhiP8alGfCWyS7JLWRf5GYP6NTs8I/8A6aS1dHKutLGut3f7T9lNIJ2YMdhz3KU/K+cmIxS0HaEH+rgn43BN7ZdhY8z823Sar142n+qpvbG+2Uvrct3un8n5Fw2H10qST+m7yl+9K7R95FPXNVnRQt1W5715zzyvYkjpl1teRbqUbpN/2b/V/wC2SORablQoJfsqfwIl8sZGo4uMY1k/EbcZRk4tXVnr4PVq5I34XJ9OlCMIJ2hFRV3d2SsrsyWsVHq7eakkzXU7I02oq/u58zoRto7ntIfE0XB2fofFFm8BH8M11sDCatJX4a9hKVLFBzo8lq/c72JtzGoOWAqta9HESlbl4KmmWrHZt4etCVOenaVr2nZ6pJ/wPqyNkmjhKapUItRu5O8nKTb2tt7di9RVqKdJkcxdipbngXI6hGRaqbda/cR+Scpxpx0J3te6kte3c0bsdldNaNK7ctWla23guJvxGR6cndNwvuWz1MzweS6dN6WuUlsb3diMmKm0k1iU+s1G7NbO3d7XTDedOfAq69lvuyv6ETkiLVeKe1aSfoTK3m385Lzlb4Zl9p5PpxnppPSu31nbXt1ek+LB5tYelW8PDT005S1zuryvfVbmza0FH9BTyxSf9r2tutZL3sU65enkY5uVrlOzf+cl5yr8Mic6SvJqXn13VQlMLm1h6Vbw8dPT0pS1zvG8731W5sjOknyal5+PdVDhzVbG6590RE6OZqO/sq/o50XvNbyWl97vJFEL3mt5LS+/3kiGl668Df0t2Cfkno4lD0JH10KFtb2+4vnnTzD0La36EMZhtNatq2c+R9AAICSPCUx+F0vGjtW1cf6kWAeMxZkzFgGnFdSf2X8JzCOxdi9x0/FdSf2X8JzCOxdi9xVqcjX0X1X+HuXnom8oxHml3h045j0TeUYjzS7w6cdwdQrV3br4egABMUwAAAAAAAAAAAAAAAAAAAAAAAAVPpJi3hoPdGvG/K9OaXtaXpLYfPj8FTr050qsdKE1aS2c009zTSafI5e3WaqE0EiRyteuSnFi+Zqq+Fpff7yRhU6PFd6OKaW5Soxb9LUlf1FjyJkRYalGnp6bjpePo2vpTctl3baV4InMcqqaOkauGaJGsW63vsXcvyKFHR1vb7jcfR8nXEfJ1xLZjHzg+j5OuI+TriAfORuUMLbx47P0lw5k18nXEPDLiAVZnjJueRItu02lw0b29pj/AGEv2j/d/qD7Yr+K6k/sv4TmFPYuxe47ZUzfTTXhXrTXUW9dpVY9F9rL5Zs/3f8A9yvOxXWsaNBPHEjketr239+40dEsX4bEvcqcU3zdTV7mdMIrN3INHA0vB0rvSelUqStpTla13bUtWxLYSpJG1WtspWqZUllVzdnwlgADsgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB9AAAAAB8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//Z"
                            width="200" height="35" alt="">
                    </a>
                </div>
    
                <div class="soction-icon" style="float:right ;">
                    <div id="logo" style="display:inline-block; margin: 5px;">
                        <a href="#"><img src="https://cdn.vectorstock.com/i/1000x1000/04/43/twitter-logo-icon-vector-27990443.webp" width="35" height="35" alt=""></a>
                    </div>
                    <div id="logo" style="display:inline-block; margin: 5px;">
                        <a href="#"><img src="https://cdn.vectorstock.com/i/1000x1000/04/43/twitter-logo-icon-vector-27990443.webp" width="35" height="35" alt=""></a>
                    </div>
                    <div id="logo" style="display:inline-block; margin: 5px;">
                        <a href="#"><img src="https://cdn.vectorstock.com/i/1000x1000/04/43/twitter-logo-icon-vector-27990443.webp" width="35" height="35" alt=""></a>
                    </div>
                    <div id="logo" style="display:inline-block; margin: 5px;">
                        <a href="#"><img src="https://cdn.vectorstock.com/i/1000x1000/04/43/twitter-logo-icon-vector-27990443.webp" width="35" height="35" alt=""></a>
    
                    </div>
                </div>
            </header>
            <div class="body-image">
                <img src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80" width="100%" height="500" alt="">
            </div>
            <div class="body-text">
                <div id="heading">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                </div>
                <div id="para_1">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis? Lorem, ipsum dolor sit
                        amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis orem, ipsum dolor sit amet consectetur adipisicing
                        elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis?</p>
    
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis?</p>
    
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobisLorem, ipsum dolor sit
                        amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis?</p>
    
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis?</p>
    
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius dicta id quisquam at suscipit omnis officiis, explicabo rem ea assumenda quam reprehenderit libero laudantium animi commodi! Nam saepe doloribus nobis?</p>
                </div>
            </div>
            <div class="footer-section">
                <div style="border:2px solid black ;"></div>
                <div class="fotertext">
                    <p>
                        conpany name <b>Lorem, ipsum dolor.</b><br> phone number <b>+1234567890</b><br> gmail <b>fghudkjvc@uscjudu</b><br>
    
                    </p>
                </div>
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
