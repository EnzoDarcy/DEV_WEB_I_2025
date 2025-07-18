<?php
    class Produto extends ClassePai  {
        public $nome;
        public $valor;
        
        function montaLinhaDados() {
            return $this -> id . $this -> separador . $this -> nome . $this -> separador . $this -> valor;
        }
    }

?>