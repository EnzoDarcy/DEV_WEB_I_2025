<?php
  require_once("../../service/usuario.service.php");
  $acao = $_POST['acao'];
  $email = isset($_POST['email'])?$_POST['email']:null;
  $senha = isset($_POST['senha'])?$_POST['senha']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;
  if($acao=="cadastrar") {
    cadastrarUsuario($email, $senha);
    echo "Cadastrado com sucesso";
  }
  if($acao=="remover") {
    removerUsuario($id);
    echo "Removido com sucesso";
  }
  if($acao=="alterar") {
    alterarUsuario($id, $email, $senha);
    echo "Alterado com sucesso";
  }
?>