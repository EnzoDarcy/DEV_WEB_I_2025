<?php
    require_once("../../model/venda.class.php");

    function cadastrarVenda($idProduto, $quantidade) {
        $cliente = new Venda(null, $idProduto, $quantidade);
        $cliente->cadastrar();
    }

    function removerVenda($id) {
        Venda::remover($id, "../../arquivos/vendas.txt");
    }
    
    function alterarVenda($id, $novoIdProduto, $novaQuantidade) {
        $vendaAux = new Venda($id, $novoIdProduto, $novaQuantidade);
        $vendaAux = $vendaAux->montaLinhaDados();
        Venda::alterar($id, "../../arquivos/vendas.txt", $vendaAux);
    }

    function listarVenda($filtroNome) {
        require_once("../../service/produto.service.php");
        require_once("../../model/produto.class.php");
        $vendas = Venda::listar("../../arquivos/vendas.txt", $filtroNome);
        echo "<table border='1'><thead><tr><th>Produto</th><th>Quantidade</th>";
        // echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($vendas as $venda) {
            echo "<tr><td>".Produto::pegaProdutoPorID($venda->idProduto)[1]."</td>";
            echo "<td>".$venda->quantidade."</td>";
            // echo "<td><a href='../telas/cadastro_cliente.php?id=". $cliente->id ."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    function mostraProdutos() {
        require_once("../../service/produto.service.php");
        echo "<select name='idProduto'>";
        $produtos = Produto::listar("../../arquivos/produtos.txt", $filtroNome);
        var_dump($produtos);
        foreach($produtos as $produto) {
            echo "<option value='$produto->id'>" . $produto->nome . "</option>";
        }
        echo "</select>"; 
    }

    // cadastrarCliente("Enzo Ferrari", "Vroom Vroom");
    // removerCliente(4);
    // alterarCliente(5, "Enzo Ferrari", "Vroom");
    // listarCliente("r");
?>