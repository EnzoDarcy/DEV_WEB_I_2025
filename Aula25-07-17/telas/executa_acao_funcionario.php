<?php
    include("../service/funcionario.service.php");

    $acao = $_POST['acao'];
    $id = isset($_POST['id'])?$_POST['id']:null;
    $nome = isset($_POST['nome'])?$_POST['nome']:null;

    $salario = isset($_POST['salario'])?$_POST['salario']:null;
    $telefone = isset($_POST['telefone'])?$_POST['telefone']:null;

    if($acao == "cadastrar") {
        cadastrarFuncionario($nome, $salario, $telefone);
        echo "Cadastrado com Sucesso";
    }
?>