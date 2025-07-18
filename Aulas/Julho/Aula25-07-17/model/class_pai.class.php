<?php

    abstract class ClassePai {
        public $id;
        private $nomeArquivo = "";
        protected $separador = "#";

        public function __construct($id, $nomeArquivo) {
            $this -> id = $id;
            $this -> nomeArquivo = "../db/".$nomeArquivo;
        }
        abstract function montaLinhaDados();


        public function encontraUltimoId () {
            $arquivo = fopen($this->nomeArquivo, "r");
            $idTemporario = 1;
            while(!feof($arquivo)) {
                $linha = fgets($arquivo);
                $dados = explode($this->separador, $linha);
                $idTemporario = !empty($dados[0])?(intval($dados[0])+1):1;
            }

            $this->id = $idTemporario;
                        var_dump($this->id);
        }

        public function cadastrar() {
            $this->encontraUltimoId();
            //TODO: Cadastrar funcionário no arquivo.
            $arquivo = fopen($this -> nomeArquivo, "a");
            fwrite($arquivo, $this -> montaLinhaDados()."\n");
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