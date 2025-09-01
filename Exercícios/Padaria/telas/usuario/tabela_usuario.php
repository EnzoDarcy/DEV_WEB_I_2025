<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuario</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php
        session_start();
        if(!empty($_SESSION["login"])) {
    ?>
    <form method="post">
        <label>Nome:</label><input name="filtro"/>
        <button>Filtrar</button>
    </form>
    <?php
    include("../../service/usuario.service.php");
    $filtro = isset($_POST["filtro"])?$_POST["filtro"]:"";
    listarUsuario($filtro);
    ?>
    <?php
        }
        else {
            echo "<a href='logar_usuario.php'>Login Inválido</a>";
        }
    ?>
</body>
</html>