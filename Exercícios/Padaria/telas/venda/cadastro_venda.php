<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
</head>
<body>
    <form id="formCadastroVenda" action="executa_acao_venda.php" method="post">
        <input type="hidden" name="acao" value="cadastrar"/>
        <label for="idProduto">Produto:</label><?php
            require_once("../../service/venda.service.php");
            mostraProdutos();
        ?><br/>
        <label for="quantidade">Quantidade:</label><input type="text" id="quantidade" name="quantidade"/>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>