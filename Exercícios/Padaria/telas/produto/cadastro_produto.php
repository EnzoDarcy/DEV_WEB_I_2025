<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <form id="formCadastroProduto" action="executa_acao_produto.php" method="post">
        <input type="hidden" name="acao" value="cadastrar"/>
        <label for="nome">Nome:</label><input type="text" id="nome" name="nome"/><br/>
        <label for="preco">Preco:</label><input type="text" id="preco" name="preco"/>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>