<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de Funcionario</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <form id="formRemocaoFuncionario" action="executa_acao_funcionario.php" method="post">
        <input type="hidden" name="acao" value="remover"/>
        <label for="id">ID:</label><input type="text" id="id" name="id"/><br/>
        <button type="submit">Remover</button>
    </form>
</body>
</html>