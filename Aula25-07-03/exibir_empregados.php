<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Filtros</legend>
            <label>Nome:</label><input type="text" name="filtro">
            <button type="submit">Filtrar</button>
        </fieldset>
    </form>
    <table border=1>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>CEP</th>
                <th>Logradouro</th>
                <th>Numero</th>
            </tr>
        </thead>
        <tbody>
            <?php
                define("SEPARADOR", "#");
                $filtro = isset($_POST["filtro"])?$_POST["filtro"]:"";
                $arquivo = fopen("empregados.txt", "r");
                $linha = "";
                while(!feof($arquivo)) {
                    $linha = fgets($arquivo);
                    $dadosEmpregado = explode(SEPARADOR, $linha);
                    $nome = $dadosEmpregado[1];
                    $cpf = $dadosEmpregado[2];
                    $rg = $dadosEmpregado[3];
                    $cep = $dadosEmpregado[4];
                    $logradouro = $dadosEmpregado[5];
                    $numero = $dadosEmpregado[6];
                    if(str_contains($nome, $filtro)) {
                        echo "<tr><td>".$nome."</td><td>".$cpf."</td><td>".$rg."</td><td>".$cep."</td><td>".$logradouro."</td><td>".$numero;
                    }
                }
                fclose($arquivo);
            ?>
        </tbody>
    </table>
</body>
</html>





<!-- <?php
    // define("SEPARADOR", "#");
    function lerUltimoId(){
        $arquivo = fopen("empregados.txt", "r");
        $linha = "";
        while(!feof($arquivo)) {
            $linha = fgets($arquivo);
        }
        fclose($arquivo);
        $dadosEmpregado = explode(SEPARADOR, $linha);
        return intval($dadosEmpregado[0]);
    }
    function lerLinha($numero_linha) {
        $arquivo = fopen("empregados.txt", "r");
        $i = 0;
        $linha = "";
        while($i < $numero_linha) {
            $linha = fgets($arquivo);
            $i++;
        }
        fclose($arquivo);
        $dadosEmpregado = explode(SEPARADOR, $linha);
    }

    echo "<table border=1>
    <tr><th>ID</th><th>Nome</th><th>CPF</th><th>RG</th><th>CEP</th><th>Logradouro</th><th>Numero</th><tr>";
    for($i = 0; $i < lerUltimoId(); $i++) {
        echo "<tr>";
        $linha = lerLinha($i);
        for($j = 0; $j < $linha; $j++) {
            echo "<td>";
            echo $linha[$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?> -->