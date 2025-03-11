<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    // Configuração do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'fotografia.olharalem@gmail.com'; // Substitua pelo seu e-mail
    $mail->Password = '2025sertavalongo'; // Use uma senha de aplicativo do Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Configuração do remetente e destinatários
    $mail->setFrom('fotografia.olharalem@gmail.com', 'Fotografia Olhar Além');
    $mail->addAddress($email); // Envia para a pessoa que agendou
    $mail->addAddress($para);  // Envia para você

    // Conteúdo do e-mail
    $mail->isHTML(false);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;

    // Ativar depuração para diagnóstico
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Exibe erros detalhados
    $mail->Debugoutput = 'html';

    // Enviar e-mail
    $mail->send();
    echo "<script>alert('Agendamento enviado com sucesso!'); window.location.href = 'index.html';</script>";
} catch (Exception $e) {
    echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}'); window.location.href = 'index.html';</script>";
}

?> 