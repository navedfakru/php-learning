<?php
$to = "navedfakru@gmail.com";
$subject = "Test Email from PHP";
$message = "This is a test email sent using PHP mail() function.";
$headers = "From: naved10055@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
