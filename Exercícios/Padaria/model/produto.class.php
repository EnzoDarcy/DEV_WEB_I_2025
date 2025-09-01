<?php
    require_once("pai.class.php");
    class Produto extends ClassePai {
        public $nome;
        public $preco;
        public $nomeArquivo = "../../arquivos/produtos.txt";
        
        public function __construct($id, $nome, $preco) {
            parent::__construct($id, $this->nomeArquivo);
            $this->nome = $nome;
            $this->preco = $preco;
        }
        public function montaLinhaDados() {
            return $this->id . self::SEPARADOR . $this->nome . self::SEPARADOR . $this->preco;
        }
         
        static public function listar($nomeArquivo, $filtroNome) {
            $arquivo = fopen($nomeArquivo, "r");
            $retorno = [];
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
                if(empty($linha))
                    continue;
                $dados = explode(self::SEPARADOR, $linha);
                if(str_contains($dados[1], $filtroNome)){
                    array_push($retorno, new Produto($dados[0], $dados[1], $dados[2]));
                }
                
            }
            return $retorno;
        }

        
        static function pegaProdutoPorID($id) {
            $arquivo = fopen("../../arquivos/produtos.txt", "r");
            while (($linha = fgets($arquivo)) !== false) {
                $dados = explode(self::SEPARADOR, $linha);
                if ($dados[0] == $id) {
                    return $dados;
                }
            }
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