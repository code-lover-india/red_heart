<?php
// Ensure this script is only accessed via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Collect form data and sanitize it
    // htmlspecialchars converts special characters to HTML entities to prevent XSS attacks.
    // trim removes whitespace from the beginning and end of a string.
    $fullName = htmlspecialchars(trim($_POST["fullName"]));
    $emailAddress = htmlspecialchars(trim($_POST["emailAddress"]));
    $contactSubject = htmlspecialchars(trim($_POST["contactSubject"]));
    $yourMessage = htmlspecialchars(trim($_POST["yourMessage"]));

    // 2. Basic validation (you can add more complex validation as needed)
    $errors = [];
    if (empty($fullName)) {
        $errors[] = "Full Name is required.";
    }
    if (empty($emailAddress) || !filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid Email Address is required.";
    }
    if (empty($yourMessage)) {
        $errors[] = "Message is required.";
    }

    // If there are no errors, proceed with sending the email
    if (empty($errors)) {
        $toEmail = "gurukrupaagrimartgaudwadi@gmail.com"; // <--- CHANGE THIS TO YOUR RECEIVING EMAIL ADDRESS
        $emailSubject = "Contact Form Submission from GuruKrupa AgriMart: " . ($contactSubject ?: "No Subject");
        $fromName = "GuruKrupa AgriMart Website"; // Name that appears as sender
        $fromEmail = "noreply@yourwebsite.com"; // <--- CHANGE THIS TO AN EMAIL ON YOUR DOMAIN (e.g., info@yourdomain.com)

        // Construct the email body
        $emailBody = "You have received a new message from the GuruKrupa AgriMart contact form.\n\n";
        $emailBody .= "Name: " . $fullName . "\n";
        $emailBody .= "Email: " . $emailAddress . "\n";
        $emailBody .= "Subject: " . $contactSubject . "\n";
        $emailBody .= "Message:\n" . $yourMessage . "\n";

        // Set email headers
        $headers = "From: " . $fromName . " <" . $fromEmail . ">\r\n";
        $headers .= "Reply-To: " . $emailAddress . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Attempt to send the email
        if (mail($toEmail, $emailSubject, $emailBody, $headers)) {
            // Redirect to a thank you page on success
            header("Location: thank_you.html"); // Create a thank_you.html page
            exit();
        } else {
            // Error sending email (server configuration issue or mail function problem)
            // For a real-world scenario, you might log this error or display a more user-friendly message.
            echo "
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Error</title>
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
                    <style>body { text-align: center; padding: 50px; font-family: sans-serif; } .alert { margin-top: 30px; }</style>
                </head>
                <body>
                    <div class='container'>
                        <div class='alert alert-danger' role='alert'>
                            <h3>Oops!</h3>
                            <p>Something went wrong and your message could not be sent. Please try again later or contact us directly.</p>
                            <a href='index.html' class='btn btn-primary'>Go Back</a>
                        </div>
                    </div>
                </body>
                </html>
            ";
        }
    } else {
        // Validation errors exist
        // You could redirect back to the form with error messages or display them here
        echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Validation Error</title>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
                <style>body { text-align: center; padding: 50px; font-family: sans-serif; } .alert { margin-top: 30px; }</style>
            </head>
            <body>
                <div class='container'>
                    <div class='alert alert-warning' role='alert'>
                        <h3>Validation Errors:</h3>
                        <ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "      </ul>
                        <p>Please go back and correct the issues.</p>
                        <a href='contact.php' class='btn btn-primary'>Go Back</a>
                    </div>
                </div>
            </body>
            </html>
        ";
    }

} else {
    // If someone tries to access process_form.php directly without a POST request
    header("Location: index.html"); // Redirect them back to the contact page
    exit();
}
?>