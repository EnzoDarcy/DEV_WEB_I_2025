<?php
$array = ["Vitor", "Fulano", "Ciclano"];

$arquivo = fopen("novo_arquivo.txt", "w");

if ($arquivo) {
    $nome = readline("Informe seu nome: ");
    $array[count($array)] = $nome;
    fwrite($arquivo, implode("\n", $array));
    fclose($arquivo);
}

?>