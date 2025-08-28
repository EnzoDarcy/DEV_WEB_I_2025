<?php
    include("../model/produto.class.php");
    function cadastrarProduto($nome, $preco) {
        $produto = new Produto(null, $nome, $preco);
        $produto->cadastrar();

    }

    function pegaProdutoPeloId($id) {
        return Produto::pegaPorId($id);
    }

    function alterarProduto($id, $novoNome, $novoPreco) {
        
    }

    function removerProduto($id) {
        
    }

    function listarProduto($filtroNome) {
        $produtos = Produto::listar($filtroNome);
        echo "<table><thead><tr><th>Nome</th><th>Telefone</th>";
        echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($produtos as $produto) {
            echo "<tr><td>".$produto->nome."</td>";
            echo "<td>".$produto->preco."</td>";
            echo "<td><a href='../telas/cadastro_produto.php?id=".$produto->id."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";

    }

?>