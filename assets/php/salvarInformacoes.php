<?php
    include("conexao.php");

    $emailCadastrado = $_SESSION["email"];

    $nome       = strtoupper($conexao->real_escape_string($_POST["txtNome"]));
    $email        = strtolower($conexao->real_escape_string($_POST["txtEmail"]));
    $telefone      = $conexao->real_escape_string($_POST["txtTelefone"]);
    $nasc  = $conexao->real_escape_string($_POST["txtNascimento"]);
    $dataNascimento = preg_replace('/[^0-9]/', '', $nasc);

    $sql = "UPDATE Clientes SET nomeCliente = '$nome', cpfCliente = '$cpf', telCliente = '$telefone', dtNascCliente = '$dataNascimento', emailCliente = '$email' WHERE emailCliente = $emailCadastrado;

?>