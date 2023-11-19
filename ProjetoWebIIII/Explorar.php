<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Seleção</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <div class="form-container">
        <h2 class="h2_ex">O que deseja?</h2>
        <form class="forme_ex" action="List.php" method="post" id="form">
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria">
                    <option value="servicos">Serviços</option>
                    <option value="ferramentas">Ferramentas</option>
                    <option value="equipamentos">Equipamentos</option>
                    <option value="livros">Livros</option>
                    <option value="espaco-comunitario">Espaço Comunitário</option>
                    <option value="orientacao">Orientação</option>
                </select>
            </div>
            <div class="form-group">
                <label for="regiao">Região:</label>
                <input type="text" id="regiao" name="regiao" required>
            </div>
            <button type="submit" nome="enviar">Enviar</button>
        </form>
    </div>

</body>
</html>
