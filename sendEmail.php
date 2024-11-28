<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
function sendEmail($email, $pw)
{
    $name = 'BulSU SC LIS';
    $sender = 'bulsusc.lis@gmail.com';
    $receiver = $email;
    $subject = 'Welcome!';
    $message = "
    <html>
    <head>
    <title>HTML E-mail Format</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900' rel='stylesheet'>
    <style>
    body, p{
        font-family: 'Poppins';
        font-size: 15px;
    }
    </style>
    </head>
    
    <body>
    <h1><strong>Greetings!</strong></h1>
    <br>
    <br>
    <br>    
    <p>Your account for the Bulacan State University - Sarmiento Campus Facility Inventory Monitoring System has been created!</p>
    <br><br>
    <p>For you to access the system, here is your temporary credentials that you may change right after<br>
    you logged in to the system:</p>
    <br><br>
        <p>&emsp;&emsp;Email: " . $email . "</p>
        <p>&emsp;&emsp;Password: " . $pw . "</p>
    <br><br>
    <p>You can use this temporary credentials to log-in to your account at https://monegasque-preparat.000webhostapp.com/</p>
    <br><br>
    <h3><strong>Have a Great Day,</strong></h3><br>
    <br>BulSU-SC LIS</p>
    </body>
    </html>";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bulsusc.LIS@gmail.com';
    $mail->Password = 'imgxedrhqkifhict';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($sender, $name);
    $mail->addAddress($receiver);
    $mail->Subject = ("$subject");
    $mail->Body = $message;
    $mail->send();
}

?>