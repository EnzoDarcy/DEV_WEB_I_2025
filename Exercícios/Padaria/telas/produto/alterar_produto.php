<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteracao de Produto</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <form id="formAlteracaoProduto" action="executa_acao_produto.php" method="post">
        <input type="hidden" name="acao" value="alterar"/>
        <label for="nome">Nome:</label><input type="text" id="nome" name="nome"/><br/>
        <label for="preco">Preco:</label><input type="tel" id="preco" name="preco"/><br>
        <label for="id">ID:</label><input type="text" id="id" name="id"/>
        <button type="submit">Alterar</button>
    </form>
</body>
</html>