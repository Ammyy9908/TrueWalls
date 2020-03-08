<?php

use PHPMailer\PHPMailer\PHPMailer;


$from_email="sbcuston@gmail.com";
$to_email="pythonDemo4@gmail.com";
$u_pass="#@$#code121";

require_once 'mailer/Exception.php';
require_once 'mailer/OAuth.php';
require_once 'mailer/PHPMailer.php';
require_once 'mailer/POP3.php';
require_once 'mailer/SMTP.php';

$mail=new PHPMailer();
//smtp settings

$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;

$mail->Username=$from_email;
$mail->Password=$u_pass;
$mail->Port= 587;

$mail->SMTPSecure="ssl";


//Email Settings


$mail->setFrom($from_email,"Sammy");


$mail->addAddress($to_email);


$mail->Subject="Test";

$mail->isHTML(true);

$mail->Body="Test Body";

if($mail->send())
{
    echo 'mail sented!';
}
else
{
    echo 'error'.$mail->ErrorInfo;
    exit();
}



?>