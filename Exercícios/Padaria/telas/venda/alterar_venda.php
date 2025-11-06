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
        <label for="id">ID:</label><input type="text" id="id" name="id"/>
        <input type="hidden" name="acao" value="alterar"/>
        <label for="idProduto">Produto:</label><?php
            require_once("../../service/venda.service.php");
            mostraProdutos();
        ?><br/>
        <label for="quantidade">Quantidade:</label><input type="number" id="quantidade" name="quantidade"/><br>
        <label for="idFuncionario">Funcionario:</label><?php
            require_once("../../service/venda.service.php");
            mostraFuncionarios();
        ?><br/>
        <label for="idCliente">Cliente:</label><?php
            require_once("../../service/venda.service.php");
            mostraClientes();
        ?><br/>
        <label for="data">Data:</label><input type="date" id="data" name="quantidade"/><br>
        <label for="pagamento">Forma de Pagamento:</label><select id="pagamento" name="pagamento">
            <option value="Pix">Pix</option>
            <option value="Credito">Cartão de Crédito</option>
            <option value="Débito">Cartão de Débito</option></select><br>
        <label for="desconto">Desconto (%):</label><input type="number" id="desconto" name="desconto"/><br>
        <label for="obs">Observação:</label><input type="text" id="obs" name="obs"/><br>
        <button type="submit">Alterar</button>
    </form>
</body>
</html>