<?php
if (isset($_POST["txtName"]) || isset($_POST["txtTel"]) || isset($_POST["txtEmail"]) || isset($_POST["txtPassword"])) {
    include_once('../scripts/conexao.php');
    
    $name     = strtoupper($conexao->real_escape_string($_POST["txtName"]));
    $tel      = $conexao->real_escape_string($_POST["txtTel"]);
    $email    = strtolower($conexao->real_escape_string($_POST["txtEmail"]));
    $password = md5($conexao->real_escape_string($_POST["txtPassword"]));
    $mascara  = array(" ", "-");
    $telefone = str_replace($mascara, "", $tel);

    $sql = "INSERT INTO Prestadoras (nomePrestadora, telPrestadora, emailPrestadora, senhaPrestadora, dtCadastro) VALUES ('$name', '$telefone', '$email', '$password', NOW())";
    
    $data = $conexao->query($sql);

    include_once("./login-prestadora.php");

    mysqli_close($conexao);

    } else {
        header("location: ../../../index.php");
    }

?>