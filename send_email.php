<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "cgberreteaga@icloud.com";
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
}
?>
