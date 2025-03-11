<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $data = $_POST['date'];
    $mensagem = $_POST['message'];

    $para = "fotografia.olharalem@gmail.com"; // Seu email
    $assunto = "Novo Agendamento de Sessão Fotográfica";

    $corpo = "Detalhes do Agendamento:\n\n";
    $corpo .= "Nome: " . $nome . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Data Desejada: " . $data . "\n";
    $corpo .= "Mensagem: " . $mensagem . "\n";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

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