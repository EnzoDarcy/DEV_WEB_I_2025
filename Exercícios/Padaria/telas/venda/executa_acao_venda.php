<?php
  require_once("../../service/venda.service.php");
  $acao = $_POST['acao'];
  $idProdutos = isset($_POST['idProduto'])?$_POST['idProduto']:null;
  $quantidade = isset($_POST['quantidade'])?$_POST['quantidade']:null;
  $idFuncionario = isset($_POST['idFuncionario'])?$_POST['idFuncionario']:null;
  $idCliente = isset($_POST['quantidade'])?$_POST['idCliente']:null;
  $data = isset($_POST['data'])?$_POST['data']:null;
  $pagamento = isset($_POST['pagamento'])?$_POST['quantidade']:null;
  $desconto = isset($_POST['desconto'])?$_POST['desconto']:null;
  $obs = isset($_POST['obs'])?$_POST['obs']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;
  if($acao=="cadastrar") {
    cadastrarVenda($idFuncionario, $idCliente, $data, $pagamento, $desconto, $obs, $idProdutos, $quantidades);
    echo "Cadastrado com sucesso";
    var_dump($idProdutos);
  }
  if($acao=="remover") {
    removerVenda($id);
    echo "Removido com sucesso";
  }
  if($acao=="alterar") {
    alterarVenda($id, $idFuncionario, $idCliente, $data, $pagamento, $desconto, $obs, $idProdutos, $quantidades);
    echo "Alterado com sucesso";
  }
?>
    <link rel="stylesheet" href="../../style.css">