<?php

$subject = "Message received on IGSA Website - ";

// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject .= $_POST['subject'];
// $message = $_POST['message'];
$name="Aditya";
$email="audi@rakspace.com";
$message="Hey there";

echo $name.$emailid.$subject.$message;

require_once "vendor/autoload.php";

 /*
  * Create the body of the message (a plain-text and an HTML version).
  * $text is your plain-text email
  * $html is your html version of the email
  * If the reciever is able to view html emails then only the html
  * email will be displayed
  */

 //$text = "Hi!\n".$message."\n";

 $text = "Message from ".$name." ".$email."\n\n".$message."\n";
 $html = "<html>
            <head></head>
            <body>
                <p>
                     Message from ".$name." ".$email."
                </p>
                <p>
                     ".$message."
                </p>
            </body>
            </html>";


 // This is your From email address
 $from = array($email => $name);
 // Email recipients
 $to = array('itigsa@gmail.com'=>'IT IGSA Team');

 // // Login credentials
 // $username = 'itigsa@gmail.com';
 // $password = 'igsa@tamu2014';
 //
 // // Setup Swift mailer parameters
 // $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
 $username="5504797a050a910f3";
 $password="530c098a13bbaf";

 $transport = Swift_SmtpTransport::newInstance('smtp-mail.outlook.com', 25, 'ssl');
 $transport->setUsername($username);
 $transport->setPassword($password);
 $swift = Swift_Mailer::newInstance($transport);

 // Create a message (subject)
 $message = new Swift_Message($subject);

 // attach the body of the email
 $message->setFrom($from);
 $message->setBody($html, 'text/html');
 $message->setTo($to);
 $message->addPart($text, 'text/plain');

 // send message
 if ($recipients = $swift->send($message, $failures))
 {
     // This will let us know how many users received this message
     echo 'Message sent out to '.$recipients.' users';
 }
 // something went wrong =(
 else
 {
     echo "Something went wrong - ";
     print_r($failures);
 }

 //header('location:/');

 ?>
