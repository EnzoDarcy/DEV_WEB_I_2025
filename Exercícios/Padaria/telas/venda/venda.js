document.addEventListener("DOMContentLoaded", () => {
    var botao = document.getElementById("botaoMais")
    var produtos = document.getElementById("produtos")
    var contador = 0;
    botao.addEventListener("click", () => {
        contador++;

        let divProduto = document.createElement("div");
        produtos.appendChild(divProduto);

        let labelProduto = document.createElement("label");
        labelProduto.textContent = "Produto:";
        labelProduto.setAttribute("for", "produtoId"+contador)
        divProduto.appendChild(labelProduto);

        let selectProduto = document.createElement("select");
        selectProduto.id = "produtoId"+contador;
        selectProduto.name = "produto[]";

        produtosBD.forEach(element => {
            var opt = document.createElement("option");
            opt.value = element.id;
            opt.textContent = element.nome;
            selectProduto.appendChild(opt);
        });
        divProduto.appendChild(selectProduto);

        let labelQuantidade = document.createElement("label");
        labelQuantidade.textContent = "Quantidade:";
        labelQuantidade.setAttribute("for", "quantidadeId"+contador)
        divProduto.appendChild(labelQuantidade);

        let inputQuantidade = document.createElement("input");
        inputQuantidade.setAttribute("type", "number");
        inputQuantidade.id = "produtoId"+contador;
        inputQuantidade.name = "quantidade[]";

        divProduto.appendChild(inputQuantidade);
        ///produtos.innerHTML += `<label for="idProduto">Produto:</label><?php require_once("../../service/venda.service.php"); mostraProdutos(); ?><br/>`
    })
})

