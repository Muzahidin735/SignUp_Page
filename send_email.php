<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'muzahidinmuhammad504@gmail.com';
$mail->Password = 'dhsp nmrs nkkm hkpd';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set From to a no-reply address
$mail->setFrom('no-reply@yourdomain.com', 'No-Reply');
// Optionally, set Reply-To to the same no-reply address
$mail->addReplyTo('no-reply@yourdomain.com', 'No Reply');
$mail->addAddress($useremail);
$mail->Subject = 'Your Subject Here';
$mail->Body = 'This is the email body.';

if ($mail->send()) {
    echo "Email sent successfully!<br>";    
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>

