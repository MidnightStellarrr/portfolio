<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load local environment variables from .env if present.
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php?status=error#contact');
    exit;
}

$firstName = trim($_POST['first_name'] ?? '');
$lastName = trim($_POST['last_name'] ?? '');
$name = trim($firstName . ' ' . $lastName);
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$subject = trim($_POST['subject'] ?? 'New message from portfolio');
$message = trim($_POST['message'] ?? '');

if ($firstName === '' || $lastName === '' || !$email || $message === '') {
    header('Location: index.php?status=error#contact');
    exit;
}

$recipient = 'hannahgranada458@gmail.com';
$cleanSubject = 'Portfolio Contact Form: ' . preg_replace('/[\r\n]+/', ' ', $subject);
$emailBody = "Name: " . htmlspecialchars($name) . "\n" .
             "Email: " . htmlspecialchars($email) . "\n\n" .
             "Message:\n" . htmlspecialchars($message) . "\n";

// SMTP settings: use environment variables or a local .env file so secrets are not stored in code.
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpUsername = getenv('SMTP_USERNAME') ?: ($_ENV['SMTP_USERNAME'] ?? null);
$smtpPassword = getenv('SMTP_PASSWORD') ?: ($_ENV['SMTP_PASSWORD'] ?? null);
$smtpEncryption = PHPMailer::ENCRYPTION_STARTTLS; // or PHPMailer::ENCRYPTION_SMTPS for port 465
$sendFromEmail = getenv('SMTP_FROM_EMAIL') ?: ($_ENV['SMTP_FROM_EMAIL'] ?? 'hannahgranada458@gmail.com');
$sendFromName = 'Portfolio Contact';

if (!$smtpUsername || !$smtpPassword) {
    file_put_contents(__DIR__ . '/mail_error.log', date('[Y-m-d H:i:s] ') . 'SMTP env missing: username=' . ($smtpUsername ? 'yes' : 'no') . ' password=' . ($smtpPassword ? 'yes' : 'no') . "\n", FILE_APPEND);
    header('Location: index.php?status=error#contact');
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = $smtpEncryption;
    $mail->Port = $smtpPort;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($sendFromEmail, $sendFromName);
    $mail->addAddress($recipient);
    $mail->addReplyTo($email, $name);

    $mail->Subject = $cleanSubject;
    $mail->Body = $emailBody;
    $mail->AltBody = $emailBody;

    if ($mail->send()) {
        header('Location: index.php?status=success#contact');
        exit;
    }
} catch (Exception $e) {
    file_put_contents(__DIR__ . '/mail_error.log', date('[Y-m-d H:i:s] ') . 'PHPMailer: ' . $e->getMessage() . "\n", FILE_APPEND);
}

header('Location: index.php?status=error#contact');
exit;
