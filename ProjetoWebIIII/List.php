<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "publicskills";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Erro Número: " . $conn->connect_error);
    }

    if(isset($_POST["enviar"])){
        $categoria = $_POST["categoria"];
        $regiao = $_POST["regiao"];
        echo  "$categoria" . "$regiao";
    }

    // Consulta e exibe a lista de funcionários.
    /*$sql = "SELECT nome, email, regiao, categoria, descricao FROM publicskills";*/

    $sql = "SELECT nome, email, regiao, categoria, descricao
    FROM publicskills
    WHERE categoria = 'serviços' AND regiao = 'Cuiabá';
    ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Encontrados</h2>";
        echo "<ul>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<li>Nome: " . $row["nome"] . ", E-mail: " . $row["email"] . ", Região: " . $row["regiao"] . ", Categoria: " . $row["categoria"] .", Descrição: " . $row["descricao"] . "</li>" . "<br>";
        }
        
        echo "</ul>";
    } else {
        echo "Nenhum funcionário encontrado.";
    }
?>