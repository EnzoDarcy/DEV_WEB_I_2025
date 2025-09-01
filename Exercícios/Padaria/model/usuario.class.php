<?php
    require_once("pai.class.php");
    class Usuario extends ClassePai {
        public $email;
        public $senha;
        public $nomeArquivo = "../../arquivos/usuarios.txt";
        
        public function __construct($id, $email, $senha) {
            parent::__construct($id, $this->nomeArquivo);
            $this->email = $email;
            $this->senha = $senha;
        }
        public function montaLinhaDados() {
            return $this->id . self::SEPARADOR . $this->email . self::SEPARADOR . $this->senha;
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
                    array_push($retorno, new Usuario($dados[0], $dados[1], $dados[2]));
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