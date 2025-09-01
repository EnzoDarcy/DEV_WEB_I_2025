<?php
    require_once("../../model/cliente.class.php");

    function cadastrarCliente($nome, $telefone) {
        $cliente = new Cliente(null, $nome, $telefone);
        $cliente->cadastrar();
    }

    function removerCliente($id) {
        Cliente::remover($id, "../../arquivos/clientes.txt");
    }
    
    function alterarCliente($id, $novoNome, $novoTelefone) {
        $clienteAux = new Cliente($id, $novoNome, $novoTelefone);
        $clienteAux = $clienteAux->montaLinhaDados();
        Cliente::alterar($id, "../../arquivos/clientes.txt", $clienteAux);
    }

    function listarCliente($filtroNome) {
        $clientes = Cliente::listar("../../arquivos/clientes.txt", $filtroNome);
        echo "<table border='1'><thead><tr><th>Nome</th><th>Telefone</th>";
        // echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($clientes as $cliente) {
            echo "<tr><td>".$cliente->nome."</td>";
            echo "<td>".$cliente->telefone."</td>";
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