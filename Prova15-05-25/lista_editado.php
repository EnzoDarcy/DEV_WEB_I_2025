<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista de Pacientes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Pacientes Cadastrados</h2>
    <p><strong>Usuário logado:</strong> <?php echo $_SESSION["usuario_logado"][0] . " (Perfil: " . $_SESSION["usuario_logado"][1] . ")";?></p>

    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
          <th>Doença</th>
          <th>Gravidade</th>
          <th>Risco</th>
        </tr>
      </thead>
      <tbody>
		<?php
			$email_logado = $_SESSION["usuario_logado"][0];
			if (!isset($_SESSION["pacientes"][$email_logado])) {
				echo "Cadastre Pacientes!";
			}
			else {
				for ($i = 0; $i < count($_SESSION["pacientes"][$email_logado]); $i++) {
					echo "<tr>";
					echo "<td>" . $_SESSION["pacientes"][$email_logado][$i][0] . "</td>";
					echo "<td>" . $_SESSION["pacientes"][$email_logado][$i][2] . "</td>";
					echo "<td>" . $_SESSION["pacientes"][$email_logado][$i][4] . "</td>";
					echo "<td>" . $_SESSION["pacientes"][$email_logado][$i][5] . "</td>";
					$risco = "baixo";
					switch($_SESSION["pacientes"][$email_logado][$i][5]) {
						case 'Leve': $risco = "Baixo";
						break;
						case 'Moderado': $risco = "Médio";
						break;
						case 'Grave': $risco = "Alto";
						break;
						case 'Crítico': if ($_SESSION["pacientes"][$email_logado][$i][2] < 60) {$risco = "Muito Alto";} else {$risco = "Extremo";};
						break;
					}
					echo "<td>" . $risco . "</td>";
					echo "</tr>";
				}	
			}
		?>
      </tbody>
    </table>

    <p><a href="cadastro_editado.php">➕ Cadastrar Novo Paciente</a></p>
  </div>
</body>
</html>
