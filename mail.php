<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'prathamesh.kittu@gmail.com'; // Replace with your email address
  $subject = 'New Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo 'Thank you for your message! We will get back to you soon.';
  } else {
    echo 'Sorry, there was an error sending your message. Please try again later.';
  }
}
?>
