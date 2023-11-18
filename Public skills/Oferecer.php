<?php
    $sernername = "localhost";
    $username = "root";
    $password = "";
    $database = "publicskills";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Erro Número". $conn->connect_error);
    }
    else {
        echo("Conexão realizado a com sucesso!");
    }
?>
