<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Captura os dados do formulário
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$para = "fotografia.olharalem@gmail.com";
$assunto = "Novo Agendamento de Sessão Fotográfica";
$corpo = "=== Novo Agendamento de Sessão ===\n\n";
$corpo .= "Nome: " . filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Data Desejada: " . filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING) . "\n";
$corpo .= "Mensagem: " . filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) . "\n";

$mail = new PHPMailer(true);
try {
    // Configuração do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'fotografia.olharalem@gmail.com'; // Altere para o email correto
    $mail->Password = 'sua_senha_de_aplicativo'; // Substitua pela senha de aplicativo do Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Alterado para STARTTLS
    $mail->Port = 587; // Porta alterada para 587

    // Configuração do remetente e destinatários
    $mail->setFrom('fotografia.olharalem@gmail.com', 'Fotografia Olhar Além');
    if (!empty($email)) {
        $mail->addAddress($email); // Envia para a pessoa que agendou
    }
    $mail->addAddress($para);  // Envia para você

    // Conteúdo do e-mail
    $mail->isHTML(false);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;

    // Desativar depuração para evitar erros Forbidden
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
    // Enviar e-mail
    $mail->send();
    echo "<script>alert('Agendamento enviado com sucesso!'); window.location.href = 'index.html';</script>";
} catch (Exception $e) {
    echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}'); window.location.href = 'index.html';</script>";
}
?> 