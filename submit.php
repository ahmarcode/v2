<?php
// Retrieve form data
$name = $_POST['name'];
$mobile = $_POST['tel'];
$email = $_POST['email'];
$country = $_POST['country'];
$project = $_POST['project'];
$role = $_POST['role'];
$message = $_POST['message'];

// Process the data (you can add validation or database storage here)

// Example: Send an email
$to = "ahmarcode@email.com";
$subject = "New form submission";
$body = "Name: $name\nMobile: $mobile\nEmail: $email\nCountry: $country\nProject: $project\nRole: $role\nMessage: $message";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    echo "Thank you! Your form has been submitted.";
} else {
    echo "Oops! Something went wrong.";
}
?>
