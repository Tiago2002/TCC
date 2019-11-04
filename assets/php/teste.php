<?php

    include("conexao.php");

    $tel = $_POST['numero'];
    $mascara = array(" ", "-");
    $telefone = str_replace($mascara, "", $tel);

    var_dump($telefone);

    $consultaTelefone = $conexao->query("SELECT * FROM Clientes WHERE telCliente = '$telefone'");

    if(mysqli_fetch_row($consultaTelefone)){
        echo utf8_encode(json_encode(array('email' => true))); 
    }
    else{
        echo utf8_encode(json_encode(array('email' => false )));
    }

?>