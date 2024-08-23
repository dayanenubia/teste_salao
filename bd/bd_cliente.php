<?php 

require_once("conecta_db.php");

function checaCliente($email, $senha){
    $conexao = conecta_db();
    $senhaMD5 = md5($senha);
    $query = "SELECT * 
              FROM Cliente 
              WHERE email='$email' AND 
                    senha='$senhaMD5'";

    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_fetch_array($resultado);

    return $dados;
}

function listaClientes(){
    $conexao = conecta_db();
    $usuarios = array();
    $query = "SELECT * 
              FROM Cliente
              ORDER BY nome";

    $resultado = mysqli_query($conexao, $query);
    while($dados = mysqli_fetch_array($resultado)) {
        array_push($usuarios, $dados);
    }

    return $usuarios;
}

function buscaCliente($email){
    $conexao = conecta_db();
    $query = "SELECT * 
              FROM Cliente
              WHERE email='$email'";

    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_num_rows($resultado);

    return $dados;
}

function cadastraCliente($nome, $email, $telefone, $senha){
    $conexao = conecta_db();
    $senhaMD5 = md5($senha);
    $query = "INSERT INTO Cliente (nome, email, telefone, senha) 
              VALUES ('$nome', '$email', '$telefone', '$senhaMD5')";

    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_affected_rows($conexao);

    return $dados;
}

function buscaClienteEditar($cpf){
    $conexao = conecta_db();
    $query = "SELECT * 
              FROM Cliente 
              WHERE CPF='$cpf'";

    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_fetch_array($resultado);

    return $dados;
}

function editarPerfilCliente($cpf, $nome, $email, $telefone){
    $conexao = conecta_db();
    $query = "SELECT * 
              FROM Cliente 
              WHERE CPF='$cpf'";

    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_num_rows($resultado);

    if($dados == 1){
        $query = "UPDATE Cliente
                  SET nome = '$nome', email = '$email', telefone = '$telefone'
                  WHERE CPF = '$cpf'";
        $resultado = mysqli_query($conexao, $query);
        $dados = mysqli_affected_rows($conexao);
        return $dados;
    }
}

function editarSenhaCliente($cpf, $senha){
    $conexao = conecta_db();
    $senhaMD5 = md5($senha);
    $query = "SELECT * 
              FROM Cliente
              WHERE CPF='$cpf'";

    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_num_rows($resultado);

    if($dados == 1){
        $query = "UPDATE Cliente
                  SET senha = '$senhaMD5'
                  WHERE CPF = '$cpf'";
        $resultado = mysqli_query($conexao, $query);
        $dados = mysqli_affected_rows($conexao);
        return $dados;
    }
}

function removeCliente($cpf){
    $conexao = conecta_db();
    $query = "DELETE FROM Cliente WHERE CPF = '$cpf'";
    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_affected_rows($conexao);
    return $dados;
}

function clienteVinculadoAgendamento($cpf_cliente) {
    $conexao = conecta_db();
    $query = "SELECT COUNT(*) AS total 
              FROM Agendamento 
              WHERE cod_cliente = '$cpf_cliente'";
    $resultado = mysqli_query($conexao, $query);
    $dados = mysqli_fetch_array($resultado);
    return $dados['total'] > 0;
}
?>
