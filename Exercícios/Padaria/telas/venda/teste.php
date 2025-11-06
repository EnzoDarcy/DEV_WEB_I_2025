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
        <input type="text" name="produtos[]"><br>
        <input type="text" name="produtos[]"><br>
        <button type="submit">enviar</button>
    </form>
    <?php
        $produtos = $_GET["produtos"];
        var_dump($produtos);
    ?>
</body>
</html>