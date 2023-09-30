<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subjects = $_POST["subjects"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($subjects) || empty($message)) {
        echo "Please fill in all the fields.";
    } else {
        // Specify the fixed email address as the sender
        $from_email = "contact@lnkventures.com"; // Replace with your desired fixed sender email address
        $to = "lnk.liyannk@gmail.com"; // Replace with the recipient's email address
        $subject = "Contact Form Submission";
        $headers = "From: $from_email";

        // Compose the email message
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Subject: $subjects\n";
        $email_message .= "Message:\n$message";

        // Send the email
        if (mail($to, $subject, $email_message, $headers)) {
            echo "Thank you for contacting us!";
        } else {
            echo "Oops! Something went wrong.";
        }
    }
}
?>
