<?php
    class Cliente {
        public $nome;
        public $cpf;
        public $telefone;

        public function __construct($nome, $cpf, $telefone) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
        }

        public function exibirDados() {
            echo "Nome | CPF | Telefone\n";
            echo $this->nome . " | " . $this->cpf . " | " . $this->telefone . "\n";
            echo "\n-----------------------------\n";
        }
    }

    abstract class Veiculo {
        public $marca;
        public $modelo;
        public $ano;
        public $disponivel;

        public function __construct($marca, $modelo, $ano, $disponivel) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->disponivel = $disponivel;
        }

        public function alugar() {
            $this->disponivel = false;
        }
        public function devolver() {
            $this->disponivel = true;
        }
        public function exibirDados() {
            echo "Marca | Modelo | Ano | Disponível\n";
            echo $this->marca . " | " . $this->modelo . " | " . $this->ano . " | " . $this->disponivel . "\n";
            echo "\n-----------------------------\n\n";
        }
    }

    class Carro extends Veiculo {
        public $qtdPortas;

        public function __construct($marca, $modelo, $ano, $disponivel, $qtdPortas) {
            parent::__construct($marca, $modelo, $ano, $disponivel);
            $this->qtdPortas = $qtdPortas;
        }
        
        public function exibirDados() {
            echo "Marca | Modelo | Ano | Disponível | Qtd. Portas\n";
            echo $this->marca . " | " . $this->modelo . " | " . $this->ano . " | " . $this->disponivel . " | " . $this->qtdPortas . "\n";
            echo "\n-----------------------------\n\n";
        }
    }

    class Moto extends Veiculo {
        public $cilindrada;

        public function __construct($marca, $modelo, $ano, $disponivel, $cilindrada) {
            parent::__construct($marca, $modelo, $ano, $disponivel);
            $this->cilindrada = $cilindrada;
        }

        public function exibirDados() {
            echo "Marca | Modelo | Ano | Disponível | Cilindrada\n";
            echo $this->marca . " | " . $this->modelo . " | " . $this->ano . " | " . $this->disponivel . " | " . $this->cilindrada . "\n";
            echo "\n-----------------------------\n\n";
        }
    }

    class Locacao {
        public $cliente;
        public $veiculo;
        public $dias;
        public $valorDiaria;
        
        public function __construct(Cliente $cliente, Veiculo $veiculo, $dias, $valorDiaria) {
            $this->cliente = $cliente;
            $this->veiculo = $veiculo;
            $this->dias = $dias;
            $this->valorDiaria = $valorDiaria;
        }

        public function calcularTotal() {
            return $this->dias * $this->valorDiaria;
        }

        public function finalizar() {
            $this->veiculo->devolver();
        }

        public function exibirResumo() {
            $this->cliente->exibirDados();
            $this->veiculo->exibirDados();
            echo "Dias | Valor Diária | Total\n";
            echo $this->dias . " | " . $this->valorDiaria . " | " . $this->calcularTotal() . "\n";
            echo "\n-----------------------------\n\n";
        }
    }

    class Locadora {
        public $clientes = [];
        public $veiculos = [];
        public $locacoes = [];

        public function adicionarCliente(Cliente $c) {
            array_push($this->clientes, $c);
        }
        public function adicionarVeiculo(Veiculo $v) {
            array_push($this->veiculos, $v);
        }
        public function registrarLocacao(Locacao $l) {
            array_push($this->locacoes, $l);
        }
        public function registrarDevolucao(Locacao $l) {
            $l->veiculo->devolver();
        }
        public function listarVeiculosDisponiveis() {
            foreach($this->veiculos as $veiculo) {
                if($veiculo->disponivel) {
                    $veiculo->exibirDados();
                }
            }
        }
        public function listarVeiculosAlugados() {
            foreach($this->veiculos as $veiculo) {
                if(!$veiculo->disponivel) {
                    $veiculo->exibirDados();
                }
            }
        }
        public function listarLocacoes() {
            foreach($this->locacoes as $locacao) {
                $locacao->exibirResumo();
            }
        }
    }

    // -------------------------------------------------------------------------------------- //

    $locadora = new Locadora();

    // 1
    $locadora->adicionarCliente(new Cliente("João Silva", "123.456.789-00", "(11) 98765-4321"));
    $locadora->adicionarCliente(new Cliente("Maria Oliveira", "234.567.890-11", "(21) 99876-5432"));
    $locadora->adicionarCliente(new Cliente("Carlos Souza", "345.678.901-22", "(31) 91987-6543"));

    $locadora->adicionarVeiculo(new Carro("Toyota", "Corolla", 2020, true, 4));
    $locadora->adicionarVeiculo(new Moto("Honda", "CB500", 2022, true, 500));
    $locadora->adicionarVeiculo(new Carro("Ford", "Fusion", 2018, false, 4));
    $locadora->adicionarVeiculo(new Moto("Yamaha", "FZ6", 2021, true, 600));

    // 2
    $locadora->registrarLocacao(new Locacao(new Cliente("Bruno Henrique", "cpf.cpf.cpf-rg", "(te) lefone"), new Moto("Horse", "White", 2007, true, 120), 5, 1250));
    $locadora->registrarLocacao(new Locacao(new Cliente("Henrique Bruno", "cpf.cpf.rg-rg", "(tele) fone"), new Carro("Elephanht", "Whitgray", 1979, false, 1), 10, 10250));

    // 3
    $locadora->listarVeiculosDisponiveis();
    $locadora->listarVeiculosAlugados();

    // 4
    $locadora->listarLocacoes();

?>