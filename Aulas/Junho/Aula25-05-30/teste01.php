<?php
$arquivo = fopen("meu_arquivo.txt", "w");

if ($arquivo) {
    fwrite($arquivo, "O nome mudou KKKKKKKKKKKKKKKKK");
    fclose($arquivo);
}

if (file_exists("meu_arquivo.txt")) {
    unlink("meu_arquivo.txt");
}

?>