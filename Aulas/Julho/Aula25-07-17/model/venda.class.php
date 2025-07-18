<?php
    class Venda extends ClassePai  {
        public $cliente;
        public $vendedor; //Tipo Funcionário
        public $produtosVendidos;
        public $valorTotal;

        function montaLinhaDados() {
            return $this -> id . $this -> separador . $this -> cliente . $this -> separador . $this -> vendedor . $this -> separador . $this -> produtosVendidos . $this -> separador . $this -> valorTotal;
        }
    }

?>