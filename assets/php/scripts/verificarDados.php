<?php
if(isset($_POST['email'])){
    include("conexao.php");
    
    $email= $_POST["email"];

    $consultaEmail = $conexao->query("SELECT emailCliente FROM Clientes WHERE emailCliente = '$email'");

    if(mysqli_fetch_row($consultaEmail)){
        echo utf8_encode(json_encode(array('email' => true))); 
    }
    else{
        echo utf8_encode(json_encode(array('email' => false )));
    }
}

if(isset($_POST['numero'])){
    include("conexao.php");

    $tel = $conexao->real_escape_string($_POST["numero"]);
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

if(isset($_POST['emailLogin']) || isset($_POST['senhaLogin'])){
    include("conexao.php");

    $email = $_POST["emailLogin"];
    $senha = $_POST["senhaLogin"];

    $consultaTelefone = $conexao->query("SELECT emailCliente FROM Clientes WHERE emailCliente = '$email' AND senhaCliente = MD5('$senha')");

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('dados' => true)));
    }
    else{
        echo utf8_encode(json_encode(array('dados' => false )));
    }
}

if(isset($_POST['emailRecuperacao']) || isset($_POST['numeroRecuperacao']) || isset($_POST['cpfRecuperacao']) || isset($_POST['dataRecuperacao'])){
    
    include("conexao.php");

    $email = $_POST["emailRecuperacao"];
    $numero = $_POST["numeroRecuperacao"];
    $cpf = $_POST["cpfRecuperacao"];
    $data = $_POST["dataRecuperacao"];

    $mascara = array(" ", "-");
    $telefone = str_replace($mascara, "", $numero);

    $consultaTelefone = $conexao->query("SELECT * FROM Clientes WHERE emailCliente = '$email' AND telCliente = '$telefone'");
    $dados = mysqli_fetch_assoc($consultaTelefone);

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('dados' => $dados )));
    }
    else{
        echo utf8_encode(json_encode(array('dados' => $dados )));
    }
}

?>