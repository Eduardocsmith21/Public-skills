<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "publicskills";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro Número: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processa os dados do formulário.
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Salva a senha de forma segura
    $regiao = $_POST["regiao"];
    $categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];

    // Insere os dados no banco de dados.
    $sql = "INSERT INTO publicskills (nome, email, senha, regiao, categoria, descricao) VALUES ('$nome', '$email', '$senha', '$regiao', '$categoria', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}

$conn->close();
?>
