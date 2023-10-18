<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bug = $_POST['bug'];

    $to = 'ethan.mslam@gmail.com'; // Replace with your email address
    $subject = 'Bug Report from RELGO App Store';
    $message = "Name: $name\n\nEmail: $email\n\nBug Description: $bug";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Bug report submitted successfully. Thank you!';
    } else {
        echo 'Error occurred while submitting the bug report. Please try again.';
    }
}
?>