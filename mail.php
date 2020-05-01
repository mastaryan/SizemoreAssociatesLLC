<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "s.size@att.net";
$subject = "Sizemore & Associates Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will be in touch with you soon." . " -" . "<a href='http://sizemoreprocessservices.com/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>