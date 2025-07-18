<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <h1>Jogador Pedra Branca</h1>
        <label for="">Pedra a ser movida: </label><input type="number" placeholder="Linha"><input name="pedra" type="number" placeholder="coluna">
    </form>
    <?php
    $tabuleiro = [
        [null, 'B', null, 'B', null, 'B', null, 'B'],
        ['B', null, 'B', null, 'B', null, 'B', null],
        [null, 'B', null, 'B', null, 'B', null, 'B'],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        ['P', null, 'P', null, 'P', null, 'P', null],
        [null, 'P', null, 'P', null, 'P', null, 'P'],
        ['P', null, 'P', null, 'P', null, 'P', null]
    ];
    exibirTabuleiro($tabuleiro);
    function exibirTabuleiro($posicoes) {
        echo "<table>";
        for ($i = 0; $i < count($posicoes); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($posicoes); $j++) {
                echo "<td>";
                echo $posicoes[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>