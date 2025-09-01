<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="login-container">
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="exemplo@gmail.com" placeholder="Email">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" value="teste123" placeholder="Senha">

            <button type="submit">Logar</button>
        </form>
    </div>

    <?php
    session_start();
    $_SESSION = [];
    $logou = 0;
    require_once("../../service/usuario.service.php");

    $usuarios = Usuario::listar("../../arquivos/usuarios.txt", "");
    
    if(!isset($_SESSION["login"])) {
        $_SESSION["login"] = [];
    }

    if(isset($_POST["email"]) && isset($_POST["senha"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        foreach($usuarios as $usuario) {
            if(trim($usuario->email) == $email && trim($usuario->senha) == $senha) {
                $_SESSION["login"] = $usuario;
                echo "Sessão válidada";
                echo "<br><a href='cadastro_usuario.php'>Cadastro</a>";
                echo "<br><a href='alterar_usuario.php'>Alterar</a>";
                echo "<br><a href='remover_usuario.php'>Remover</a>";
                echo "<br><a href='tabela_usuario.php'>Listar</a>";

                echo "<br><br><a href='logar_usuario.php'><button>Deslogar</button></a>";
                $logou = 1;
            }
        }
        if(!$logou) {
            echo "Não está logado";
        }
    }
    ?>
</body>
</html>