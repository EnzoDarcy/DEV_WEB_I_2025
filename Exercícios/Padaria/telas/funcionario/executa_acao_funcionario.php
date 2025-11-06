<?php
  require_once("../../service/funcionario.service.php");
  $acao = $_POST['acao'];
  $nome = isset($_POST['nome'])?$_POST['nome']:null;
  $salario = isset($_POST['salario'])?$_POST['salario']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;
  if($acao=="cadastrar") {
    cadastrarFuncionario($nome, $salario);
    echo "Cadastrado com sucesso";
  }
  if($acao=="remover") {
    removerFuncionario($id);
    echo "Removido com sucesso";
  }
  if($acao=="alterar") {
    alterarFuncionario($id, $nome, $salario);
    echo "Alterado com sucesso";
  }
?>
    <link rel="stylesheet" href="../../style.css">