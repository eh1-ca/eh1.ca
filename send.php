<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address" . $email);
    }

    $to = "gor@eh1.ca";
    $subject = "New Contact Form Submission from EH1.ca";
    $headers =  "From: noreply@eh1.ca\r\n" .
                "Reply-To: $email\r\n" .
                "Content-Type: text/plain; charset=UTF-8";

    $body = "You have received a new message from the contact form:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
      header("Location: error.html");
      exit();
    }
} else {
  header("Location: error.html");
  exit();
}