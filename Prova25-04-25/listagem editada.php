<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Listagem de Veículos</title>
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

    nav {
      display: flex;
      gap: 15px;
    }

    nav a {
      text-decoration: none;
      color: #4285f4;
      font-weight: bold;
    }

    nav a:hover {
      color: #357ae8;
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .user-avatar {
      width: 32px;
      height: 32px;
      background-color: #4285f4;
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: bold;
    }

    main {
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="cadastro editado.php">Cadastro</a>
      <a href="listagem editada.php">Listagem</a>
    </nav>
    <h2>Locadora</h2>
    <div class="user-info">
	<span><?php echo $_SESSION["nome"] . " (" . $_SESSION["email"] . ")"; ?></span>
      <div class="user-avatar">J</div>
    </div>
  </header>

  <main>
    <h2>Veículos Cadastrados</h2>
    <table>
      <thead>
        <tr>
          <th>Modelo</th>
          <th>Montadora</th>
          <th>Combustível</th>
          <th>Tipo Cobumstível</th>
          <th>Número de Lugares</th>
          <th>Litragem de Bagagem</th>
          <th>Preço (R$)</th>
        </tr>
      </thead>
      <tbody>
	<?php
		foreach($_SESSION["veiculos"] as $key => $value) {
			echo "<tr>";
			for($j = 0; $j < count($_SESSION["veiculos"][$key]); $j++) {
				echo "<td>" . $_SESSION["veiculos"][$key][$j] . "</td>";
			}
			echo "</tr>";
		}
	?>
      </tbody>
    </table>
  </main>
</body>
</html>
