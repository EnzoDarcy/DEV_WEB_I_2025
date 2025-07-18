<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function soma($a, $b) {
            return $a + $b;
        }
        function subtracao($a, $b) {
            return $a - $b;
        }
        function multiplicacao($a, $b) {
            return $a * $b;
        }
        function divisao($a, $b) {
            return $a / $b;
        }
        function potencia($a, $b) {
            return $a ** $b;
        }
    ?>
    <form action="" method="get">
        <input name = "numero_a" type = "number"></input><br>
        <input name = "numero_b" type = "number"></input><br>
        <select name="seletor" id="">
            <option value="a">+</option>
            <option value="s">-</option>
            <option value="m">*</option>
            <option value="d">/</option>
            <option value="p">^</option>
        </select><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if (isset($_GET["numero_a"]) && isset($_GET["numero_b"])) {
            $a = $_GET["numero_a"];
            $b = $_GET["numero_b"];
            $seletor = $_GET["seletor"];
            switch($seletor) {
                case "a": $resultado = soma($a, $b); break;
                case "s": $resultado = subtracao($a, $b); break;
                case "m": $resultado = multiplicacao($a, $b); break;
                case "d": $resultado = divisao($a, $b); break;
                case "p": $resultado = potencia($a, $b); break;
                default: $resultado = "1nv4l1d 0p3r4t10n";
            }
            echo $resultado;
        }
    ?>
</body>
</html>





























































































































































<!-- eramos amigos -->