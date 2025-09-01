<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de Usuario</title>
</head>
<body>
    <?php
        session_start();
        if(!empty($_SESSION["login"])) {
    ?>
    <form id="formRemocaoUsuario" action="executa_acao_usuario.php" method="post">
        <input type="hidden" name="acao" value="remover"/>
        <label for="id">ID:</label><input type="text" id="id" name="id"/><br/>
        <button type="submit">Remover</button>
    </form>
    <?php
        }
        else {
            echo "<a href='logar_usuario.php'>Login Inválido</a>";
        }
    ?>
</body>
</html>