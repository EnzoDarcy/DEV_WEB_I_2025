<?php
    include("../model/cliente.class.php");
    function cadastrarCliente($nome, $telefone) {
        $cliente = new Cliente(null, $nome, $telefone);
        $cliente->cadastrar();
    }

    function pegaClientePeloId($id) {
        return Cliente::pegaPorId($id);
    }

    function alterarCliente($id, $novoNome, $novoTelefone) {
        
    }

    function removerCliente($id) {
        
    }

    function listarCliente($filtroNome) {
        $clientes = Cliente::listar($filtroNome);
        echo "<table><thead><tr><th>Nome</th><th>Telefone</th>";
        echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($clientes as $cliente) {
            echo "<tr><td>".$cliente->nome."</td>";
            echo "<td>".$cliente->telefone."</td>";
            echo "<td><a href='http://localhost/DEV_WEB_I_2025/Aulas/Julho/Aula25-07-24/telas/cadastro_cliente.php?id=".$cliente->id."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";

    }

?>