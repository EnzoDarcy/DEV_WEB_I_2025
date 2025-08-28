<?php

    const SEPARADOR = "#";

    abstract class ClassePai {
        public $id;
        public $nomeArquivo;
        const SEPARADOR = "#";

        public function __construct($id, $nomeArquivo) {
            $this->id = $id;
            $this->nomeArquivo = $nomeArquivo;
        }

        public function pegaUltimoId($nomeArquivo) {
            $arquivo = fopen($nomeArquivo, "r");
            while (($linha = fgets($arquivo)) !== false) {
                
            }
        }

        public function cadastrar($cadastrado, $nomeArquivo) {
            $arquivo = fopen($nomeArquivo, "a");
            fwrite($arquivo, $cadastrado . "\n");
        }

        public function remover($id, $nomeArquivo) {
            $arquivo = fopen($nomeArquivo, "r+");
            $acumulador = "";
            while (($linha = fgets($arquivo)) !== false) {
                $dados = explode(self::SEPARADOR, $linha);
                if ($dados[0] == $id) {
                    continue;
                }
                else {
                    $acumulador = $acumulador . $linha;
                }
            }
            ftruncate($arquivo, 0);
            rewind($arquivo);
            fwrite($arquivo, $acumulador);
            fclose($arquivo);
        }

        public function alterar() {
            
        }

        // abstract public function listar();
    }
?>