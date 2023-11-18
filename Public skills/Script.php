<?php
    $sernername = "localhost";
    $username = "root";
    $password = "";
    $database = "publicskill";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Erro Número". $conn->connect_error);
    }
    if($_SERVER["RESQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $regiao = $_POST["regiao"];
        $descricao = $_POST["descrcao"];

        $sql = "INSERT INTO cadastro(username, email, $senha, $regiao, $descricao) VALUES ($username, $email, $senha, $regiao, $descricao)";
    }
?>
