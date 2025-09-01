<?php
  require_once("../../service/venda.service.php");
  $acao = $_POST['acao'];
  $idProduto = isset($_POST['idProduto'])?$_POST['idProduto']:null;
  $quantidade = isset($_POST['quantidade'])?$_POST['quantidade']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;
  if($acao=="cadastrar") {
    cadastrarVenda($idProduto, $quantidade);
    echo "Cadastrado com sucesso";
  }
  if($acao=="remover") {
    removerVenda($id);
    echo "Removido com sucesso";
  }
  if($acao=="alterar") {
    alterarVenda($id, $idProduto, $quantidade);
    echo "Alterado com sucesso";
  }
?>