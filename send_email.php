<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $phone = htmlspecialchars($_POST['Phone']);
    $email = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['Massage']);

    $to = "reaper.ujayer@gmail.com";
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>