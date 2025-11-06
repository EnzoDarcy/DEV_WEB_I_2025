<?php
    require_once("../../model/produto.class.php");

    function cadastrarProduto($nome, $preco) {
        $cliente = new Produto(null, $nome, $preco);
        $cliente->cadastrar();
    }

    function removerProduto($id) {
        Produto::remover($id, "../../arquivos/produtos.txt");
    }
    
    function alterarProduto($id, $novoNome, $novoPreco) {
        $produtoAux = new Produto($id, $novoNome, $novoPreco);
        $produtoAux = $produtoAux->montaLinhaDados();
        Produto::alterar($id, "../../arquivos/produtos.txt", $produtoAux);
    }
    
    function listarProduto($filtroNome) {
        $produtos = Produto::listar("../../arquivos/produtos.txt", $filtroNome);
        echo "<table border='1'><thead><tr><th>Nome</th><th>Telefone</th>";
        // echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($produtos as $produto) {
            echo "<tr><td>".$produto->nome."</td>";
            echo "<td>".$produto->preco."</td>";
            // echo "<td><a href='../telas/cadastro_cliente.php?id=". $cliente->id ."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    function listarProdutoArray() {
        $produtos = Produto::listar("../../arquivos/produtos.txt", "");
        return $produtos;
    }

    // cadastrarCliente("Enzo Ferrari", "Vroom Vroom");
    // removerCliente(4);
    // alterarCliente(5, "Enzo Ferrari", "Vroom");
    // listarCliente("r");
?>