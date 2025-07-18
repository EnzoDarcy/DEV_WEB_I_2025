<?php

    abstract class ClassePai {
        public $id;
        private $nomeArquivo = "";
        protected $separador = "#";

        public function __construct($id, $nomeArquivo) {
            $this -> id = $id;
            $this -> nomeArquivo = $nomeArquivo;
        }
        abstract function montaLinhaDados();

        public function cadastrar() {
            //TODO: Cadastrar funcionário no arquivo.
            $arquivo = fopen($this -> nomeArquivo, "a");
            fwrite($arquivo, $this -> montaLinhaDados());
            fclose($arquivo);

        }
        public function removar() {
            //TODO: Remover funcionário no arquivo.
        }
        public function alterar() {
            //TODO: Alterar linhas funcionário no arquivo.
        }
        public function listar() {
            //TODO: Listar funcionário no arquivo.
        }
    }
?>