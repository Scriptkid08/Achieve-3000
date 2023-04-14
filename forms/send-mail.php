<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'achieve3000tutorials@gmail.com'; // Replace with your own email address
    $subject = 'New message from ' . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'There was a problem sending your message. Please try again later.';
    }
}
?>
