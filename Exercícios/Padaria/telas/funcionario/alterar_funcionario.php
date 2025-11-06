<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteracao de Funcionario</title>
    <link rel="stylesheet" href="../../style.css">
    
</head>
<body>
    <form id="formAlteracaoFuncionario" action="executa_acao_funcionario.php" method="post">
        <input type="hidden" name="acao" value="alterar"/>
        <label for="nome">Nome:</label><input type="text" id="nome" name="nome"/><br/>
        <label for="salario">Salario:</label><input type="number" id="salario" name="salario"/><br>
        <label for="id">ID:</label><input type="text" id="id" name="id"/>
        <button type="submit">Alterar</button>
    </form>
</body>
</html>