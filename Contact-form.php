<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "your-email@example.com"; // change to your actual email
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
}
?>
