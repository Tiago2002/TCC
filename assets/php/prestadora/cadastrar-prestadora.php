<?php
if (isset($_POST["txtName"]) || isset($_POST["txtTel"]) || isset($_POST["txtEmail"]) || isset($_POST["txtPassword"])) {

    include('../scripts/conexao.php');

    $name       = $conexao->real_escape_string($_POST["txtName"]);
    $tel        = $conexao->real_escape_string($_POST["txtTel"]);
    $email      = $conexao->real_escape_string($_POST["txtEmail"]);
    $password   = md5($conexao->real_escape_string($_POST["txtPassword"]));

    $mascara = array(" ", "-");

    $telefone = str_replace($mascara, "", $tel);

    $data = $conexao->query("INSERT INTO Prestadoras (nomePrestadora, telPrestadora, emailPrestadora, senhaPrestadora, dtCadastro) VALUES ('$name', '$telefone', '$email', '$password', NOW())");
    
    if ($data === false){
        echo "Connection error!";
    }
    else{
        header("location: ../../../pages/login-page.php");
    }

    mysqli_close($conexao);
        
    } 
    else{
        header("location: ../../../index.php");
    }
?>