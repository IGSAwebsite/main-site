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

// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('aloks1990@gmail.com', 'My Subject', $message);

echo "Email sent and here the email:".$message;

?>
