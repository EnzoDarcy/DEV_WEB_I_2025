<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        define ("pi", 3.14);
        $a = 10;
        echo pi;
        echo "<br>";
        switch($a):
            case 1: echo "impar";  break;
            case 8: echo "par";  break;
            case 3: echo "impar";  break;
            case 4: echo "par";  break;
            default: echo "não sei contar a partir daí";
            case 10: echo "par";  break;
            case 15: echo "impar";  break;
            case 13: echo "impar";  break;
            case 5: echo "impar";  break;
            case 9: echo "impar";  break;
            case 0: echo "par"; break;
            case 11: echo "impar";  break;
            case 7: echo "impar";  break;
            case 6: echo "par";  break;
            case 14: echo "par";  break;
            case 2: echo "par";  break;
            case 12: echo "par";  break;
        endswitch
    ?>
</body>
</html>

<!-- 
a b c d e f g h i j k l m n o p q r s t u v w x y z
menino: b c d g h m n o q r t v x
menina: a e f i j k l p s u w y z
-->