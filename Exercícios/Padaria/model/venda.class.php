<?php
    require_once("pai.class.php");
    class Venda extends ClassePai {
        public $idCliente;
        public $idFuncionario;
        public $data;
        public $pagamento;
        public $desconto;
        public $obs;
        public $idProduto;
        public $quantidade;
        public $nomeArquivo = "../../arquivos/vendas.txt";
        
        public function __construct($id, $idCliente, $idFuncionario, $data, $pagamento, $desconto, $obs, $idProduto, $quantidade) {
            parent::__construct($id, $this->nomeArquivo);
            $this->idCliente = $idCliente;
            $this->idFuncionario = $idFuncionario;
            $this->data = $data;
            $this->pagamento = $pagamento;
            $this->desconto = $desconto;
            $this->obs = $obs;
            $this->idProduto = $idProduto;
            $this->quantidade = $quantidade;

        }
        public function montaLinhaDados() {
            return $this->id . self::SEPARADOR . $this->idCliente . self::SEPARADOR . $this->idFuncionario . self::SEPARADOR . $this->data . self::SEPARADOR . $this->pagamento . self::SEPARADOR . $this->desconto . self::SEPARADOR . $this->obs . self::SEPARADOR . $this->idProduto . self::SEPARADOR . $this->quantidade;
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
                    array_push($retorno, new Venda($dados[0], $dados[1], $dados[2], $dados[3], $dados[4], $dados[5], $dados[6], $dados[7], $dados[8]));
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