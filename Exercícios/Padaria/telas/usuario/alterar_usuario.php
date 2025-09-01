<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteracao de Usuario</title>
</head>
<body>
    <?php
        session_start();
        if(!empty($_SESSION["login"])) {
    ?>
    <form id="formAlteracaoUsuario" action="executa_acao_usuario.php" method="post">
        <input type="hidden" name="acao" value="alterar"/>
        <label for="email">Email:</label><input type="text" id="email" name="email"/><br/>
        <label for="senha">Senha:</label><input type="tel" id="senha" name="senha"/><br>
        <label for="id">ID:</label><input type="text" id="id" name="id"/>
        <button type="submit">Alterar</button>
    </form>
    <?php
        }
        else {
            echo "<a href='logar_usuario.php'>Login Inválido</a>";
        }
    ?>
</body>
</html>