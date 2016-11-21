<?php

session_start();


require_once 'swiftmailer/lib/swift_required.php';

$email = $_POST['email'];

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")->setUsername('compilepad@gmail.com')->setPassword('2016 CompilePad');

$mailer  = Swift_Mailer::newInstance($transport);
// the message itself
$message = Swift_Message::newInstance('hello')->setFrom(array(
    'noreply@compilepad.com' => 'CompilePad'
))->setTo(array(
    $email
))->setSubject("Thank you for subscribing us")->setBody("We will let you know about our latest products.
You are receiving this email because you tried CompilePad. ");

if (!empty($email) ) {
    $mailer->send($message);
    
    $_SESSION['sent'] = "Thank you for subscribing us";
    include('index.php');
    
} else {
    $_SESSION['sent'] = "All fields are mandatory.";
    include('index.php');
}


?>