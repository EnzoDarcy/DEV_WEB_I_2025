<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteracao de Venda</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <form id="formAlteracaoVenda" action="executa_acao_venda.php" method="post">
        <input type="hidden" name="acao" value="alterar"/>
        <label for="idProduto">Produto:</label><input type="text" id="idProduto" name="idProduto"/><br/>
        <label for="quantidade">Quantidade:</label><input type="tel" id="quantidade" name="quantidade"/><br>
        <label for="id">ID:</label><input type="text" id="id" name="id"/>
        <button type="submit">Alterar</button>
    </form>
</body>
</html>