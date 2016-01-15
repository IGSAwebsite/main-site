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
$txt = "<html><p>Hello world!</p></html>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
$headers .= "From: aloks1990@gmail.com"."\r\n"."CC: aditya.p1993@hotmail.com";

mail($to,$subject,$txt,$headers);

echo "Email sent and here the email:".$message;

?>
