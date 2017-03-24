<?php
$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 
$mail->Host       = "smtp.gmail.com";      // SMTP server
$mail->Port       = 587;                   // SMTP port
$mail->Username   = "ardaniramirez@gmail.com";  // username
$mail->Password   = "MisterBeen1342";            // password

$mail->SetFrom('ardaniramirez@gmail.com', 'Test');

$mail->Subject    = "I hope this works!";

$mail->MsgHTML('Blah');

$address = "ardaniramirez@test.com";
$mail->AddAddress($address, "Test");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}