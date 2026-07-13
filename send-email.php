<?php

$title = $_POST['title'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "pandurawinds@gmail.com";
$subject = "New website message: " . $title;

$body = "
Title: $title

From: $email

Phone: $phone

Message:
$message
";

$headers = "From: website@yourdomain.com\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Sorry, your message could not be sent.";
}

?>
