<?php
    require_once("../../model/usuario.class.php");

    function cadastrarUsuario($email, $senha) {
        $cliente = new Usuario(null, $email, $senha);
        $cliente->cadastrar();
    }

    function removerUsuario($id) {
        Usuario::remover($id, "../../arquivos/usuarios.txt");
    }
    
    function alterarUsuario($id, $novoEmail, $novoPreco) {
        $usuarioAux = new Usuario($id, $novoEmail, $novoPreco);
        $usuarioAux = $usuarioAux->montaLinhaDados();
        Usuario::alterar($id, "../../arquivos/usuarios.txt", $usuarioAux);
    }
    
    function listarUsuario($filtroNome) {
        $usuarios = Usuario::listar("../../arquivos/usuarios.txt", $filtroNome);
        echo "<table border='1'><thead><tr><th>Email</th><th>Senha</th>";
        // echo "<th>Ações</th>";//NOVA LINHA
        echo "</tr></thead><tbody>";
        foreach($usuarios as $usuario) {
            echo "<tr><td>".$usuario->email."</td>";
            echo "<td>".$usuario->senha."</td>";
            // echo "<td><a href='../telas/cadastro_cliente.php?id=". $cliente->id ."'>Alterar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

    // cadastrarCliente("Enzo Ferrari", "Vroom Vroom");
    // removerCliente(4);
    // alterarCliente(5, "Enzo Ferrari", "Vroom");
    // listarCliente("r");
?>