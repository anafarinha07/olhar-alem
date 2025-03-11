<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação dos campos
    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $data = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Verificar se os campos estão preenchidos
    if (!$nome || !$email || !$data) {
        echo "<script>
                alert('Por favor, preencha todos os campos obrigatórios.');
                window.location.href = 'index.html';
              </script>";
        exit;
    }

    $para = "fotografia.olharalem@gmail.com";
    $assunto = "Novo Agendamento de Sessão Fotográfica";

    // Melhorando a formatação do e-mail
    $corpo = "=== Novo Agendamento de Sessão ===\n\n";
    $corpo .= "Nome: " . $nome . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Data Desejada: " . $data . "\n";
    $corpo .= "Mensagem: " . $mensagem . "\n";

    // Cabeçalhos adicionais para melhor entrega
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Tentativa de envio
    if(mail($para, $assunto, $corpo, $headers)) {
        echo "<script>
                alert('Agendamento enviado com sucesso! Entraremos em contato em breve.');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script>
                alert('Ocorreu um erro ao enviar o agendamento. Por favor, tente novamente.');
                window.location.href = 'index.html';
              </script>";
    }
}
?> 