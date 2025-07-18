<?php
    include("../model/produto.class.php");
    function cadastrarProduto($nome, $preco) {
        $produto = new Produto(null, $nome, $preco);
        $produto->cadastrar();

    }

    function alterarProduto($id, $novoNome, $novoSalario, $novoTelefone) {
        
    }

    function removerProduto($id) {
        
    }

    function listarProduto($filtroNome) {
        $produtos = Produto::listar();
        echo "<table><thead><tr><th>Nome</th><th>Preco</th></tr></thead><tbody>";
        foreach($produtos as $produto) {
            echo "<tr><td>".$produto->nome."</td>";
            echo "<td>".$produto->preco."</td>";
        }
        echo "</tbody></table>";

    }

?>