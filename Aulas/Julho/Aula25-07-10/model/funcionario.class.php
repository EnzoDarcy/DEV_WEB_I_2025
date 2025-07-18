<?php
    class Funcionario extends ClassePai  {
        public $nome;
        public $telefone;
        public $salario;
    
        public function __construct($id, $nome, $salario, $telefone) {
            parent::__construct($id, "funcionario.txt");
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->salario = $salario;
        }
    
        function montaLinhaDados() {
            return $this -> id . $this -> separador . $this -> nome . $this -> separador . $this -> salario . $this -> separador . $this -> telefone;
        }
    }

?>