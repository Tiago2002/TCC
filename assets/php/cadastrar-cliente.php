<?php
    if (isset($_POST["register"])) {
        $connection = new mysqli("localhost", "root", "", "dbProjetoTCC");
        
        $name       = $connection->real_escape_string($_POST["txtName"]);
        $tel        = $connection->real_escape_string($_POST["txtTel"]);
        $email      = $connection->real_escape_string($_POST["txtEmail"]);
        $password   = md5($connection->real_escape_string($_POST["txtPassword"]));
        $verifyPass = md5($connection->real_escape_string($_POST["txtConfPass"]));
        
        
        $data = $connection->query("INSERT INTO Clientes (nomeCliente, telCliente, emailCliente, senhaCliente, dtCadastro) VALUES ('$name', '$tel', '$email', '$password', NOW())");
        
        if ($data === false)
            echo "Connection error!";
        else
            header("location: ../../pages/login-page.php");
        
    }
    mysqli_close($connection);
?>