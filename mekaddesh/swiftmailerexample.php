<?php
require_once 'swiftmailer/lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587)
  ->setUsername('ardaniramirez@gmail.com')
  ->setPassword('MisterBeen1342')
  ;

$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('ardaniramirez@gmail.com'))
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);