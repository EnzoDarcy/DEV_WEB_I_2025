<?php
    require_once("../../model/venda.class.php");

    function cadastrarVenda($idCliente, $idFuncionario, $data, $pagamento, $desconto, $obs, $idProduto, $quantidade) {
        $venda = new Venda(null, $idCliente, $idFuncionario, $data, $pagamento, $desconto, $obs, $idProduto, $quantidade);
        $venda->cadastrar();
    }

    function removerVenda($id) {
        Venda::remover($id, "../../arquivos/vendas.txt");
    }
    
    function alterarVenda($id, $novoIdFuncionario, $novoIdCliente, $novaData, $novoPagamento, $novoDesconto, $novoObs, $novoIdProduto, $novaQuantidade) {
        $vendaAux = new Venda($id, $novoIdFuncionario, $novoIdCliente, $novaData, $novoPagamento, $novoDesconto, $novoObs, $novoIdProduto, $novaQuantidade);
        $vendaAux = $vendaAux->montaLinhaDados();
        Venda::alterar($id, "../../arquivos/vendas.txt", $vendaAux);
    }

    function listarVenda($filtroNome) {
        require_once("../../model/produto.class.php");
        require_once("../../model/cliente.class.php");
        require_once("../../model/funcionario.class.php");
        $vendas = Venda::listar("../../arquivos/vendas.txt", $filtroNome);
        echo "<table border='1'><thead><tr><th>Produto</th><th>Quantidade</th><th>Funcionario</th><th>Cliente</th><th>Data</th><th>Pagamento</th><th>Desconto</th><th>Obs</th><th>Preço</th><th>Preço Total</th>";
        // echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($vendas as $venda) {
            echo "<tr><td>".Produto::pegaProdutoPorID($venda->idProduto)[1]."</td>";
            echo "<td>".$venda->quantidade."</td>";
            var_dump("-->" . $venda->idFuncionario);
            echo "<td>".Funcionario::pegaFuncionarioPorID($venda->idFuncionario)[1]."</td>";
            echo "<td>".Cliente::pegaClientePorID($venda->idCliente)[1]."</td>";
            echo "<td>".$venda->data."</td>";
            echo "<td>".$venda->pagamento."</td>";
            echo "<td>".$venda->desconto."</td>";
            echo "<td>".$venda->obs."</td>";
            echo "<td>".Produto::pegaProdutoPorID($venda->idProduto)[2] * $venda->quantidade."</td>";
            echo "<td>".Produto::pegaProdutoPorID($venda->idProduto)[2] * $venda->quantidade * (1 - $venda->desconto/100)."</td>";
            // echo "<td><a href='../telas/cadastro_cliente.php?id=". $cliente->id ."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    function mostraFuncionarios() {
        require_once("../../service/funcionario.service.php");
        echo "<select name='idFuncionario'>";
        $funcionarios = Funcionario::listar("../../arquivos/funcionarios.txt", $filtroNome);
        var_dump($funcionarios);
        foreach($funcionarios as $funcionario) {
            echo "<option value='$funcionario->id'>" . $funcionario->nome . "</option>";
        }
        echo "</select>"; 
    }

    function mostraClientes() {
        require_once("../../service/cliente.service.php");
        echo "<select name='idCliente'>";
        $clientes = Produto::listar("../../arquivos/clientes.txt", $filtroNome);
        var_dump($clientes);
        foreach($clientes as $cliente) {
            echo "<option value='$cliente->id'>" . $cliente->nome . "</option>";
        }
        echo "</select>"; 
    }
    
    // cadastrarCliente("Enzo Ferrari", "Vroom Vroom");
    // removerCliente(4);
    // alterarCliente(5, "Enzo Ferrari", "Vroom");
    // listarCliente("r");
?>