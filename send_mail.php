<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are filled
    if (empty($_POST["name"]) || empty($_POST["mobileno"]) || empty($_POST["email"]) || empty($_POST["city"])) {
        echo "<p>Please fill in all fields.</p>";
        exit();
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"];
    $city = $_POST["city"];

    $mailTo = "sales.balajiserenity@gmail.com";
    $subject = "Register Your Property Form";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    $message = "You have received a message from:\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile No: $mobileno\n";
    $message .= "City: $city\n";

    $success = mail($mailTo, $subject, $message, $headers);

    if ($success) {
        echo "<script>alert('Email has been sent successfully'); window.location.href = 'index.php';</script>";
    } else {
        echo "<p>Error sending email. Please try again.</p>";
    }
} else {
    echo "Invalid request method";
}
