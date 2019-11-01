<?php
if (isset($_POST["txtName"]) || isset($_POST["txtTel"]) || isset($_POST["txtEmail"]) || isset($_POST["txtPassword"])) {

    include('conexao.php');

    $name       = strtoupper($conexao->real_escape_string($_POST["txtName"]));
    $tel        = $conexao->real_escape_string($_POST["txtTel"]);
    $email      = strtolower($conexao->real_escape_string($_POST["txtEmail"]));
    $password   = md5($conexao->real_escape_string($_POST["txtPassword"]));

    $sql = "INSERT INTO Clientes (nomeCliente, telCliente, emailCliente, senhaCliente, dtCadastro) VALUES ('$name', '$tel', '$email', '$password', NOW())";

    $data = $conexao->query($sql);
    
    if ($data === false){
        echo "Connection error!";
    }
    else{
        header("location: ../../pages/login-page.php");
    }

    mysqli_close($conexao);
        
    } 
    else{
        header("location: ../../index.php");
    }
?>