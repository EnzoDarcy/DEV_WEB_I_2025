<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <?php
        session_start();
        if(!empty($_SESSION["login"])) {
    ?>
    <form id="formCadastroUsuario" action="executa_acao_usuario.php" method="post">
        <input type="hidden" name="acao" value="cadastrar"/>
        <label for="email">Email:</label><input type="text" id="email" name="email"/><br/>
        <label for="senha">Senha:</label><input type="text" id="senha" name="senha"/>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
        }
        else {
            echo "<a href='logar_usuario.php'>Login Inválido</a>";
        }
    ?>
</body>
</html>