<!DOCTYPE html>
<?php
    require_once("../../service/venda.service.php");
    require_once("../../service/produto.service.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="venda.js" defer></script>
    <script>
        var produtosBD = [];
        <?php
            $produtos = listarProdutoArray();
            foreach($produtos as $produto) {
                echo "produtosBD.push({id:" . $produto->id . ", nome:'" . $produto->nome . "'});\n";
            }
        ?>
    </script>
</head>
<body>
    <form id="formCadastroVenda" action="executa_acao_venda.php" method="post">
        <input type="hidden" name="acao" value="cadastrar"/>
        
        <div>
            <button id="botaoMais" type="button">+</button>
        </div>
        <label for="quantidade">Quantidade:</label><input type="number" id="quantidade" name="quantidade"/>
        <label for="idFuncionario">Funcionario:</label><?php
            mostraFuncionarios();
        ?><br/>
        <label for="idCliente">Cliente:</label><?php
            mostraClientes();
        ?><br/>
        <label for="data">Data:</label><input type="date" id="data" name="data"/><br>
        <label for="pagamento">Forma de Pagamento:</label><select id="pagamento" name="pagamento">
            <option value="Pix">Pix</option>
            <option value="Credito">Cartão de Crédito</option>
            <option value="Débito">Cartão de Débito</option></select><br>
        <label for="desconto">Desconto (%):</label><input type="number" id="desconto" name="desconto"/><br>
        <label for="obs">Observação:</label><input type="text" id="obs" name="obs"/><br>
        <div id="produtos">
            
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>