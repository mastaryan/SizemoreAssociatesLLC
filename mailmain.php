<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "s.size@att.net";
$subject = "Sizemore & Associates Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will be in touch with you soon." . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>