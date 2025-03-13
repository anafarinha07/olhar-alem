<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$para = "fotografia.olharalem@gmail.com";
$assunto = "Novo Agendamento de Sessão Fotográfica";
$corpo = "=== Novo Agendamento ===\n\n";
$corpo .= "Nome: " . filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Data: " . filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING) . "\n";
$corpo .= "Mensagem: " . filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) . "\n";

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'fotografia.olharalem@gmail.com';
$mail->Password = '2025sertavalongo'; // Aqui vai a senha de aplicativo do Gmail
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->CharSet = 'UTF-8'; // Adicionado para evitar problemas com acentos
$mail->SMTPDebug = 0; // Desative o debug para evitar erros de Forbidden

    $mail->setFrom('fotografia.olharalem@gmail.com', 'Fotografia Olhar Além');
    if (!empty($email)) {
        $mail->addAddress($email);
    }
    $mail->addAddress($para);

    $mail->isHTML(false);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;

    $mail->send();
    echo "<script>alert('Agendamento enviado com sucesso!'); window.location.href = 'index.html';</script>";
} catch (Exception $e) {
    echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}'); window.location.href = 'index.html';</script>";
}
?>
