<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "quote@jetuxehealthcare.ng";
    $subject = "New Quote Request from Jetuxe Healthcare";
    $body = "
    A new quote request has been submitted on Jetuxe Healthcare's website.\n\n
    Name: $name\n
    Email: $email\n
    Phone: $phone\n
    Service: $service\n
    Message: $message\n\n
    Please respond promptly.
    ";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h1>Thank you! Your request has been submitted successfully.</h1>";
    } else {
        echo "<h1>Sorry, there was an error processing your request. Please try again later.</h1>";
    }
} else {
    echo "<h1>Invalid Request</h1>";
}
?>
