<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Email: <input name="email_input" type="email">
        Senha: <input name="senha_input" type="password">
        <button type="submit">Log in</button>
    </form>
    <?php
        if(isset($_GET["email_input"]) && isset($_GET["senha_input"])) {
            session_start();
            $email_input = $_GET["email_input"];
            $senha_input = $_GET["senha_input"];
            $i;
            $login_valido;
            $contas = [
                ["email" => "teste1@gmail.com", "senha" => "teste1", "nome" => "Troves"],
                ["email" => "teste2@gmail.com", "senha" => "teste2", "nome" => "Scaft"],
                ["email" => "teste3@gmail.com", "senha" => "teste3", "nome" => "Preckle"]
            ];
            for ($i = 0; $i < count($contas); $i++) {
                if ($contas[$i]["email"] == $email_input && $contas[$i]["senha"] == $senha_input) {
                    $_SESSION["usuario_logado"] = $contas[$i];
                    $login_valido = 1;
                    echo "Sucesso ao logar";
                    echo '<a href="home.php"><button>Voltar</button></a>';
                    break;
                }
            }
            if ($login_valido != 1) {
                echo "Login Inválido!";
            }
        }
    ?>
</body>
</html>