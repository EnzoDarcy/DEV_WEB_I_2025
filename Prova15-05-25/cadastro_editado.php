<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Paciente</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Cadastro de Paciente</h2>
	<p><strong>Usuário logado:</strong> <?php echo $_SESSION["usuario_logado"][0] . " (Perfil: " . $_SESSION["usuario_logado"][1] . ")";?></p>
	
    <form method="POST">
      <label for="nome">Nome do Paciente:</label>
      <input type="text" name="nome" required>

      <label for="genero">Gênero:</label>
      <select name="genero" required>
        <option>Masculino</option>
        <option>Feminino</option>
        <option>Outro</option>
      </select>

      <label for="idade">Idade:</label>
      <input type="number" name="idade" required>

      <label for="sangue">Tipo Sanguíneo:</label>
      <select name="sangue" required>
        <option>A+</option>
        <option>A−</option>
        <option>B+</option>
        <option>B−</option>
        <option>AB+</option>
        <option>AB−</option>
        <option>O+</option>
        <option>O−</option>
      </select>

      <label for="doenca">Doença Diagnosticada:</label>
      <input type="text" name="doenca" required>

      <label for="gravidade">Gravidade:</label>
      <select name="gravidade" required>
        <option>Leve</option>
        <option>Moderado</option>
        <option>Grave</option>
        <option>Crítico</option>
      </select>

      <label for="data">Data de Admissão:</label>
      <input type="date" name="data" required>

      <button type="submit">Cadastrar Paciente</button>
    </form>
	<?php
		if (isset($_POST["nome"]) && isset($_POST["genero"]) && isset($_POST["idade"]) && isset($_POST["sangue"]) && isset($_POST["doenca"]) && isset($_POST["gravidade"]) && isset($_POST["data"])) {
			$nome = $_POST["nome"];
			$genero = $_POST["genero"];
			$idade = $_POST["idade"];
			$sangue = $_POST["sangue"];
			$doenca = $_POST["doenca"];
			$gravidade = $_POST["gravidade"];
			$data = $_POST["data"];
			$paciente_cadastrado = [$nome, $genero, $idade, $sangue, $doenca, $gravidade, $data];
			$_SESSION["pacientes"][$_SESSION["usuario_logado"][0]][] = $paciente_cadastrado;
		}
	?>
    <p><a href="lista_editado.php">🔙 Ir para Lista de Pacientes</a></p>
  </div>
</body>
</html>
