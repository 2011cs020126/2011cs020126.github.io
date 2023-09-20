<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configure your email settings here
    $to = "nexushubtech@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n";

    // Compose the email content
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Message: " . $message . "\n";

    // Send the email
    mail($to, $subject, $email_content, $headers);

    // Redirect the user to a "thank you" page after successful submission
    header("Location: thankyou.html");
    exit();
}
?>
