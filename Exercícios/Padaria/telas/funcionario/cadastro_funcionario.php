<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <form id="formCadastroFuncionario" action="executa_acao_funcionario.php" method="post">
        <input type="hidden" name="acao" value="cadastrar"/>
        <label for="nome">Nome:</label><input type="text" id="nome" name="nome"/><br/>
        <label for="salario">Salario:</label><input type="number" id="salario" name="salario"/>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>