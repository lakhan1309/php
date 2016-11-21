<?php

session_start();


require_once 'swiftmailer/lib/swift_required.php';




$to      = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")->setUsername('compilepad@gmail.com')->setPassword('2016 CompilePad');

$mailer  = Swift_Mailer::newInstance($transport);
// the message itself
$message = Swift_Message::newInstance('hello')->setFrom(array(
    'noreply@compilepad.com' => 'CompilePad'
))->setTo(array(
    $email
))->setBody($message)->setSubject("Thank you for contacting us")->setBody("Thanks for taking the time to contact us. We will soon be in touch in response to your email.");

if (isset($_POST['submit']) && !empty($to) && !empty($email) && !empty($message)) {
    $mailer->send($message);
    
    $_SESSION['sent'] = "Thank you!\\nYour message has been successfully sent. We will contact you very soon!";
    
    
    include('index.php');
    
} else {
    $_SESSION['sent'] = "All fields are mandatory.";
    include('index.php');
}


?>