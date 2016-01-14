<?php

$name = $_POST['name'];
$emailid = $_POST['emailid'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $name.$emailid.$subject.$message;

$to      = 'aloks1990@gmail.com';
$subject = $subject;
$message = "Hello from ".$name." <".$emailid."> \n".$message;
$headers = 'From: aloks1990@gmail.com' . "\r\n" .
    'Reply-To: aloks1990@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo "Email sent and here the email:".$message;

?>
