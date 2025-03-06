<?php
// db.php
$servername = "localhost";
$username = "username"; // seu usuário do banco de dados
$password = "password"; // sua senha do banco de dados
$dbname = "database_name"; // nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inserir dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO bookings (name, email, date, message) VALUES ('$name', '$email', '$date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Agendamento realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
