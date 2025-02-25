<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $nome = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensagem = htmlspecialchars(trim($_POST['message']));

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
        exit;
    }

    // Configurações do email
    $to = "fotografia.olharalem@gmail.com"; // Substitua pelo seu email
    $subject = "Novo contato de $nome";
    $body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
    $headers = "From: $email";

    // Enviar email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
