<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: 'Courier New', Courier, monospace;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
        }
        #negrito {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        echo '<table>';
        echo '<tr id="negrito"><td>NOME</td><td>CATEGORIA</td><td>FABRICANTE</td></tr>';
        for ($i = 0; $i < count($_SESSION["produtos"]); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($_SESSION["produtos"][$i]); $j++) {
                echo "<td>";
                echo $_SESSION["produtos"][$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>