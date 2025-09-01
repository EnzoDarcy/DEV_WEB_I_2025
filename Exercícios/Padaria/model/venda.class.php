<?php
    require_once("pai.class.php");
    class Venda extends ClassePai {
        public $idProduto;
        public $quantidade;
        public $nomeArquivo = "../../arquivos/vendas.txt";
        
        public function __construct($id, $idProduto, $quantidade) {
            parent::__construct($id, $this->nomeArquivo);
            $this->idProduto = $idProduto;
            $this->quantidade = $quantidade;
        }
        public function montaLinhaDados() {
            return $this->id . self::SEPARADOR . $this->idProduto . self::SEPARADOR . $this->quantidade;
        }
         
        static public function listar($nomeArquivo, $filtroNome) {
            require_once("../../model/produto.class.php");
            $arquivo = fopen($nomeArquivo, "r");
            $retorno = [];
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                if(str_contains(Produto::pegaProdutoPorID($dados[1])[1], $filtroNome)){
                    array_push($retorno, new Venda($dados[0], $dados[1], $dados[2]));
                }
                
            }
            return $retorno;
        }

        
    }

    //Serve como a tela de cadastrar
    // $func = new Cliente("Enzo Darcy", "Depende");
    // $func->cadastrar($func->nomeArquivo);

    //Serve como a tela de alterar
    // $func->alterar(1, $func->montaLinhaDados());

    // Serve como a tela de listar
    // var_dump($func->listar("Darcy"));
?>