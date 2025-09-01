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

        public function pegaUltimoId() {
            $arquivo = fopen($this->nomeArquivo, "r");
            $dados = "";
            while (($linha = fgets($arquivo)) !== false) {
                $dados = explode(self::SEPARADOR, $linha);
            }
            if (empty($dados)) {
                return 0;
            }
            return $dados[0];
        }

        public function cadastrar() {
            $arquivo = fopen($this->nomeArquivo, "a");
            $this->id = $this->pegaUltimoId() + 1;
            fwrite($arquivo, $this->montaLinhaDados() . "\n");
        }

        static public function remover($id, $nomeArquivo) {
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

        static public function alterar($id, $nomeArquivo, $alterante) {
            $arquivo = fopen($nomeArquivo, "r+");
            $acumulador = "";
            while (($linha = fgets($arquivo)) !== false) {
                $dados = explode(self::SEPARADOR, $linha);
                if ($dados[0] == $id) {
                    $acumulador = $acumulador . $alterante . "\n";
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

        abstract public function montaLinhaDados();
        static abstract public function listar($nomeArquivo, $filtroNome);
    }
?>