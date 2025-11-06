<?php
    echo "Jogo da Adivinhação Maneiro!\n";
    echo "Escolha a Dificuldade (0 - Pacífico, 1 - Mole, 2 - Desafio, 3 - Loteria | Não precisa ser )\n";
    $dificuldade = fgets(STDIN);
    $dificuldade = ($dificuldade < 0)?0:$dificuldade;
    $dificuldade = ($dificuldade > 3)?3:$dificuldade;
    $tentativas = 0.2/(0.006604 * $dificuldade) * 0.6 -5;
    echo "Dificuldade Escolhida: " . $dificuldade . "\n";
    echo "Digite seu número: ";
    $numero = fgets(STDIN);
    
?>
