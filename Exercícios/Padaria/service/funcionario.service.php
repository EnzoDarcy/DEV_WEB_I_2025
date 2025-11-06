<?php
    require_once("../../model/funcionario.class.php");

    function cadastrarFuncionario($nome, $salario) {
        $funcionario = new Funcionario(null, $nome, $salario);
        $funcionario->cadastrar();
    }

    function removerFuncionario($id) {
        Funcionario::remover($id, "../../arquivos/funcionarios.txt");
    }
    
    function alterarFuncionario($id, $novoNome, $novoSalario) {
        $funcionarioAux = new Funcionario($id, $novoNome, $novoSalario);
        $funcionarioAux = $funcionarioAux->montaLinhaDados();
        Funcionario::alterar($id, "../../arquivos/funcionarios.txt", $funcionarioAux);
    }

    function listarFuncionario($filtroNome) {
        $funcionarios = Funcionario::listar("../../arquivos/funcionarios.txt", $filtroNome);
        echo "<table border='1'><thead><tr><th>Nome</th><th>Salario</th>";
        // echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($funcionarios as $funcionario) {
            echo "<tr><td>".$funcionario->nome."</td>";
            echo "<td>".$funcionario->salario."</td>";
            // echo "<td><a href='../telas/cadastro_cliente.php?id=". $cliente->id ."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    // cadastrarCliente("Enzo Ferrari", "Vroom Vroom");
    // removerCliente(4);
    // alterarCliente(5, "Enzo Ferrari", "Vroom");
    // listarCliente("r");
?>