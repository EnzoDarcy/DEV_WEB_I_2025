<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Login - Sistema Hospitalar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Login de Usuário</h2>
		<form method="POST">
			<label for="email">E-mail:</label>
			<input type="email" name="email" required>
			<label for="senha">Senha:</label>
			<input type="password" name="senha" required>
			<label for="perfil">Perfil:</label>
			<select name="perfil" required>
				<option value="">Selecione o perfil</option>
				<option value="Recepcionista">Recepcionista</option>
				<option value="Médico">Médico</option>
				<option value="Enfermeiro">Enfermeiro</option>
			</select>
			<button type="submit">Entrar</button>
		</form>
	</div>
	<?php
		$logins_possiveis = [
		["jonas@gmail.com", "Enfermeiro", "Jonas Conclier", "j123"],
		["maria@gmail.com", "Médico", "Maria Fennec", "m123"],
		["clover@gmail.com", "Recepcionista", "Clover Amaral", "c123"],
		["plinio@gmail.com", "Médico", "Plínio Equínio", "p123"]
		];
		if(isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["perfil"])) {
			$email_momentaneo = $_POST["email"];
			$senha_momentanea = $_POST["senha"];
			$perfil_momentaneo = $_POST["perfil"];
			for ($i = 0; $i < count($logins_possiveis); $i++) {
				if ($email_momentaneo == $logins_possiveis[$i][0] && $senha_momentanea == $logins_possiveis[$i][3] && $perfil_momentaneo == $logins_possiveis[$i][1]) {
					$cadastro_momentaneo = [$logins_possiveis[$i][2], $logins_possiveis[$i][1], $logins_possiveis[$i][0]];
					$_SESSION["usuario_logado"] = $cadastro_momentaneo;
					echo "<a href='lista_editado.php'><button>Login Válido</button></a>";
					break;
				}
				if ($i+1 == count($logins_possiveis)) {
					echo "<h1>Login Inválido</h1>";
				}
			}
		}
	?>
</body>
</html>
