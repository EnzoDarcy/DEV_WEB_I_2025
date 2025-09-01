<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form id="formCadastroCliente" action="executa_acao_cliente.php" method="post">
        <input type="hidden" name="acao" value="cadastrar"/>
        <label for="nome">Nome:</label><input type="text" id="nome" name="nome"/><br/>
        <label for="telefone">Telefone:</label><input type="tel" id="telefone" name="telefone"/>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>