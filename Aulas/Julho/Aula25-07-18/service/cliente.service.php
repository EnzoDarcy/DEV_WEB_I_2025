<?php
    include("../model/cliente.class.php");
    function cadastrarCliente($nome, $telefone) {
        $cliente = new Cliente(null, $nome, $telefone);
        $cliente->cadastrar();

    }

    function alterarCliente($id, $novoNome, $novoSalario, $novoTelefone) {
        
    }

    function removerCliente($id) {
        
    }

    function listarCliente($filtroNome) {
        $clientes = Cliente::listar();
        echo "<table><thead><tr><th>Nome</th><th>Telefone</th></tr></thead><tbody>";
        foreach($clientes as $cliente) {
            echo "<tr><td>".$cliente->nome."</td>";
            echo "<td>".$cliente->telefone."</td>";
        }
        echo "</tbody></table>";

    }

?>