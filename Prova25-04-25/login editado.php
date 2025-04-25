<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login - Locadora</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f1f3f4;
      padding: 10px 20px;
      border-bottom: 1px solid #ccc;
    }

    main {
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
      width: 300px;
    }

    form input {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form button {
      padding: 10px;
      background-color: #4285f4;
      color: white;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    form button:hover {
      background-color: #357ae8;
    }
  </style>
</head>
<body>
  <header>
    <h2>Locadora</h2>
  </header>

  <main>
 	<form action="" method="post">
  		<h2>Login</h2>
  		<input name="email" type="email" placeholder="E-mail" required>
  		<input name="senha" type="password" placeholder="Senha" required>
  		<button type="submit">Entrar</button>
	</form>
	<?php
		@$_SESSION["veiculos"];
		$usuarios = [
			["cebolinha@gmail.com", "Cebola Martins", "golducha"],
			["magali@outlook.com", "Magali Rocha", "melancia"],
			["cascudo@gmail.com", "Cascao Pereira", "hidrofobia"],
			["monica@cefet-rj.br", "Monica Lima", "sansaosinho"]
		];
		if(isset($_POST["email"]) && isset($_POST["senha"])) {
			$email = $_POST["email"];
			$senha = $_POST["senha"];
			for ($i = 0; $i < count($usuarios); $i++) {
				if ($email == $usuarios[$i][0] && $senha == $usuarios[$i][2]) {
					$_SESSION["email"] = $email;
					$_SESSION["nome"] = $usuarios[$i][1];
					echo '<a href="listagem editada.php">Ir para a LISTAGEM</a>';
					echo '<a href="cadastro editado.php">Ir para o CADASTRO</a>';
				}
			}
		}
	?>
	</main>
</body>
</html>
