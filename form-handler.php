<?php

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='deepankgupta1453@gmail.com';
$email_subject='NEw Form Submission';
$emial_body="User Name: $name.\n".
            "User Email: $vistor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";

$to='deepankgupta1453@gmail.com';
$headers ="From: $email_form\r\n";
$headers ="Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$emial_body,$headers);

header("Location: contact.html");
?>