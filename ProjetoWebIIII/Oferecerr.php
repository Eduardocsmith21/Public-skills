<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body class="body_cadastro">
    <div>
        <header><br><br></header>
        <h1 class="h1_cadastro">O Que Deseja Compartilhar</h1>
        <div class="form_cadastro">
            <form action="processar.php" method="POST">
                <label for="nome_usuario">Nome de Usuário:</label>
                <input type="text" id="nome_usuario" name="nome" required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                
                <label for="regiao">Região onde mora:</label>
                <input type="text" id="regiao" name="regiao" required>
                
                <label for="categoria">Categoria de Serviço:</label>
                <select id="categoria" name="categoria">
                    <option value="Serviços">Serviços</option>
                    <option value="Ferramentas">Ferramentas</option>
                    <option value="Equipamentos">Equipamentos</option>
                    <option value="Livros">Livros</option>
                    <option value="Espaço comunitário">Espaço comunitário</option>
                    <option value="Orientação">Orientação</option>
                </select>
                
                <label for="descricao">Descrição do Serviço/Produto:</label>
                <textarea id="descricao" name="descricao" rows="4" required></textarea>
                
                <button class="button_oferecer" type="submit">Enviar</button>
            </form>
        </div>  
    </div>
</body>
</html>
