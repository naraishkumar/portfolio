<?php
include '../config/config.php';  
include '../config/function.php';

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = ['success' => false, 'message' => ''];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table = "contact";
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message'],
    ];

    // Insert data and check result
    if (!insertData($conn, $table, $data)) {
        $response['message'] = 'There was an error sending your message.';
    } else {
        // Send email
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'rajnaresh329@gmail.com'; // Replace with your Gmail address
            $mail->Password = 'azfomrtzbkesbloc'; // Replace with your app password
            $mail->SMTPSecure = 'tls'; // Use 'tls' for port 587
            $mail->Port = 587; // TCP port to connect to

            // Recipients setting
            $mail->setFrom('rajnaresh329@gmail.com', 'Naraish Kumar'); // Replace with your email address and name
            $mail->addAddress('rajnaresh329@gmail.com', 'Naraish'); // Replace with your email address
            $mail->addReplyTo($data['email'], $data['name']); // Use the client's email for replies

            // Content of email
            $mail->isHTML(true);
            $mail->Subject = 'Hi Naraish! ' . $data['name'] . ' want to contact to you by visiting your Portfolio.';
            $mail->Body    = '<p><strong>Name:</strong> ' . htmlspecialchars($data['name']) . '</p>'
                            . '<p><strong>Email:</strong> ' . htmlspecialchars($data['email']) . '</p>'
                            . '<p><strong>Subject:</strong> ' . htmlspecialchars($data['subject']) . '</p>'
                            . '<p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($data['message'])) . '</p>';
            $mail->AltBody = 'Name: ' . htmlspecialchars($data['name']) . "\n"
                            . 'Email: ' . htmlspecialchars($data['email']) . "\n"
                            . 'Subject: ' . htmlspecialchars($data['subject']) . "\n"
                            . 'Message: ' . htmlspecialchars($data['message']);

            $mail->send();
            $response['success'] = true;
            $response['message'] = 'Your message has been sent successfully!';
        } catch (Exception $e) {
            $response['message'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

// echo json_encode($response);
echo 'OK';
exit();