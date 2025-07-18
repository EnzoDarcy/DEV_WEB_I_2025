<?php
$arquivo = fopen("arquivo_de_nomes.txt", "r");

if ($arquivo) {
    $conteudo = file_get_contents("arquivo_de_nomes.txt");
    var_dump($conteudo);

    fclose($arquivo);
}

?>