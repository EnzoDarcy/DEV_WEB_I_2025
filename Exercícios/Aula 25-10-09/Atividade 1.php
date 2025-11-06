<?php   
    abstract class Funcionario {
        public $nome;
        public $salario;

        abstract function calcularBonus();

        public function __construct($nome, $salario) {
            $this->nome = $nome;            
            $this->salario = $salario;            
        }
    }
    class Gerente extends Funcionario {
        public function __construct($nome, $salario) {
            parent::__construct($nome, $salario); 
        }
        public function calcularBonus() {
            return $this->salario * 1.2;
        }
    }
    class Desenvolvedor extends Funcionario {
        public function __construct($nome, $salario) {
            parent::__construct($nome, $salario); 
        }
        public function calcularBonus() {
            return $this->salario * 1.1;
        }
    }

    $funcionarios = [
        new Gerente("Marcos Silva", 10000),
        new Desenvolvedor("Ana Paulaa", 7000),
        new Desenvolvedor("Carlos Souza", 8500),
        new Gerente("Fernanda Lima", 12000),
        new Desenvolvedor("Juliana Torres", 9000)
    ];

    echo "Nome | Salário | Salário com Bonus\n";
    for ($i = 0; $i < count($funcionarios); $i++) {
        echo $funcionarios[$i]->nome . " | " . $funcionarios[$i]->salario . " | " . $funcionarios[$i]->calcularBonus() . "\n";
    }
?>