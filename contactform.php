<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$message = $_Post['message'];
$mobile = $_Post['number'];

$email_from ='nallaboy9@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name .\n".
				"User Email: $visitor_email.\n".
					"User Message: $message.\n";

$to = "mushthaqabid40@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



















/*$to = "mushthaqabid40@gmail.com";
$subject = "Mail from website";
$txt = "Name =". $name . "\r\nEmail = ". $email . "\r\nMessage =". $message . "\r\n Mobile number =". $mobile;

$headers = "From: noreply@gmail.com" . "\r\n". "CC: somebodyelse@example.com";

if ($email!=NULL){
	mail($to,$subject,$txt,$headers);
}

header("Location:index.html");
?>