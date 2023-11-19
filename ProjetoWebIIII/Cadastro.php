<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header><br><br></header>
    <div class="container_cadastro">
        <h1 class="h1_cadastro">Cadastro</h1>
        <div class="center_cadastro">
            <form class="formulario_cadastro" action="processar.php" method="POST">
                <label for="nome_usuario">Nome de Usuário:</label>
                <input type="text" id="nome_usuario" name="nome_usuario" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <br><br><br>
                <button class="button-green">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>

