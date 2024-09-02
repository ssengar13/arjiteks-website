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
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $experience = htmlspecialchars($_POST['experience']);
    $noticeperiod = htmlspecialchars($_POST['noticeperiod']);

    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['resume']['tmp_name'];
        $fileName = $_FILES['resume']['name'];
        $fileSize = $_FILES['resume']['size'];
        $fileType = $_FILES['resume']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Validate file extension
        $allowedExtensions = ['pdf', 'doc', 'docx'];
        if (in_array($fileExtension, $allowedExtensions)) {
            $uploadFileDir = './uploaded_files/';
            $dest_path = $uploadFileDir . $fileName;

            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0755, true);
            }

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $attachmentPath = $dest_path;
            } else {
                $attachmentPath = '';
            }
        } else {
            $attachmentPath = '';
        }
    } else {
        $attachmentPath = '';
    }

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
        $mail->Subject = 'Apply Now';
        $mail->Body    = "Name: $name<br>
        Email: $email<br>
        Phone Number: $phonenumber<br>
        Qualification: $qualification<br>
        Experience: $experience<br>
        Notice Period: $noticeperiod";

        // Add attachment if exists
        if (!empty($attachmentPath)) {
            $mail->addAttachment($attachmentPath);
        }

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
