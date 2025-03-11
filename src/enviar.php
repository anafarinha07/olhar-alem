<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'seuemail@gmail.com'; 
    $mail->Password = 'suasenha'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('fotografia.olharalem@gmail.com');
    $mail->addAddress($para);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;

    $mail->send();
    echo "<script>alert('Agendamento enviado com sucesso!'); window.location.href = 'index.html';</script>";
} catch (Exception $e) {
    echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}'); window.location.href = 'index.html';</script>";
}

?> 