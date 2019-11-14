<?php

// Verificacoes de dados existente Cliente
if(isset($_POST['emailCliente'])){
    include("conexao.php");
    
    $email= $_POST["emailCliente"];

    $consultaEmail = $conexao->query("SELECT emailCliente FROM Clientes WHERE emailCliente = '$email'");

    if(mysqli_fetch_row($consultaEmail)){
        echo utf8_encode(json_encode(array('email' => true))); 
    }
    else{
        echo utf8_encode(json_encode(array('email' => false )));
    }
}

if(isset($_POST['telCliente'])){
    include("conexao.php");

    $tel = $conexao->real_escape_string($_POST["telCliente"]);
    $mascara = array(" ", "-");
    $telefone = str_replace($mascara, "", $tel);

    $consultaTelefone = $conexao->query("SELECT telCliente FROM Clientes WHERE telCliente = '$telefone'");

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('telefone' => true))); 
    }
    else{
        echo utf8_encode(json_encode(array('telefone' => false )));
    }
}

// Login Cliente
if(isset($_POST['emailLoginCliente']) || isset($_POST['senhaLoginCliente'])){
    include("conexao.php");

    $email = $_POST["emailLoginCliente"];
    $senha = md5($_POST["senhaLoginCliente"]);

    $consultaTelefone = $conexao->query("SELECT emailCliente FROM Clientes WHERE emailCliente = '$email' AND senhaCliente = '$senha'");

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('dados' => true)));
    }
    else{
        echo utf8_encode(json_encode(array('dados' => false )));
    }
}

// Verificacoes de dados existente Prestadora
if(isset($_POST['emailPrestadora'])){
    include("conexao.php");
    
    $email= $_POST["emailPrestadora"];

    $consultaEmail = $conexao->query("SELECT emailPrestadora FROM Prestadoras WHERE emailPrestadora = '$email'");

    if(mysqli_fetch_row($consultaEmail)){
        echo utf8_encode(json_encode(array('email' => true))); 
    }
    else{
        echo utf8_encode(json_encode(array('email' => false )));
    }
}

if(isset($_POST['telPrestadora'])){
    include("conexao.php");

    $tel = $conexao->real_escape_string($_POST["telPrestadora"]);
    $mascara = array(" ", "-");
    $telefone = str_replace($mascara, "", $tel);

    $consultaTelefone = $conexao->query("SELECT telPrestadora FROM Prestadoras WHERE telPrestadora = '$telefone'");

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('telefone' => true))); 
    }
    else{
        echo utf8_encode(json_encode(array('telefone' => false )));
    }
}

// Login prestadora
if(isset($_POST['emailLoginPrestadora']) || isset($_POST['senhaLoginPrestadora'])){
    include("conexao.php");

    $email = $_POST["emailLoginPrestadora"];
    $senha = md5($_POST["senhaLoginPrestadora"]);

    $consultaTelefone = $conexao->query("SELECT nomePrestadora FROM Prestadoras WHERE emailPrestadora = '$email' AND senhaPrestadora = '$senha'");

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('dados' => true)));
    }
    else{
        echo utf8_encode(json_encode(array('dados' => false )));
    }
}

?>