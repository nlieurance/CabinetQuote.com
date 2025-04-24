<?php
$to = "nicholaslieurance@yahoo.com";
$subject = "Subject";
$message = "Hello";
$headers = "From: Nick";

mail($to, $subject, $message, $headers);

echo $message;
?>
