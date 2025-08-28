<?php
    include("pai.class.php");
    class Cliente extends ClassePai {
        public $nome;
        public $telefone;
        public $nomeArquivo = "../arquivos/clientes.txt";
        
        public function __construct($id, $nome, $telefone) {
            parent::__construct($id, $this->nomeArquivo);
            $this->nome = $nome;
            $this->telefone = $telefone;
        }
    }

?>