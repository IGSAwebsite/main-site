<?php

$name = $_POST['name'];
$emailid = $_POST['emailid'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $name.$emailid.$subject.$message;
//
// $to      = 'aloks1990@gmail.com';
// $subject = $subject;
// $message = "Hello from ".$name." <".$emailid.">".$message;
// $headers = 'From: aloks1990@gmail.com'."\r\n".'Reply-To: aloks1990@gmail.com'."\r\n".'X-Mailer: PHP/'.phpversion();
//
// mail($to, $subject, $message, $headers);

$to      = 'aloks1990@gmail.com';
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: aloks1990@gmail.com" . "\r\n" .
"CC: aditya.p1993@hotmail.com";

mail($to,$subject,$txt,$headers);


echo "Email sent and here the email:".$message;

?>
