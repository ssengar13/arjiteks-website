<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $employee = htmlspecialchars($_POST['employee']);
    $companyname = htmlspecialchars($_POST['companyname']);
    $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);


    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jabarruvc@gmail.com';
        $mail->Password = 'kodxfrawjthhisxg'; // Use App Password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS
        $mail->Port = 587; // TLS port

        // Recipients
        $mail->setFrom('jabarruvc@gmail.com', 'Mailer');
        $mail->addAddress('contact@arjiteks.com'); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Appointment';
        $mail->Body    = "Name: $name<br>
        Email: $email <br>
        Phone Number: $number<br>
         Number of Employee : $employee<br>
         Company Name: $companyname <br>
         Location: $location <br>
         Message: $message";

        // Enable SMTP debugging
        $mail->SMTPDebug = 2; // Verbose debug output
        $mail->Debugoutput = function ($str, $level) {
            echo "Debug Level $level: $str<br>"; // Output to the browser for debugging
        };

        $mail->send();
        echo "<div class='alert alert-success'><span>Message has been sent successfully!</span></div>";
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'><span>Error: " . $e->getMessage() . "</span></div>";
    }
}
