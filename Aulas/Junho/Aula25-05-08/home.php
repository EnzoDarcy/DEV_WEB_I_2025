<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php"><button>Log in</button></a>
    <a href="logoff.php"><button>Log off</button></a>
    <?php 
        session_start(); 
        if (isset($_SESSION["usuario_logado"])) {
            $_SESSION["usuario_logado"][2];
        }
    ?>
</body>
</html>