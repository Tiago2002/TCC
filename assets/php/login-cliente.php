<?php
	session_start();

	if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {
		header("Location: ../../pages/dashboard.php");
		exit();
	}

	if (isset($_POST["logIn"])) {
		$connection = new mysqli("localhost", "root", "", "dbProjetoTCC");
		
		$email = $connection->real_escape_string($_POST["email"]);
		$password = md5($connection->real_escape_string($_POST["password"]));
		$data = $connection->query("SELECT nomeCliente FROM Clientes WHERE emailCliente='$email' AND senhaCliente='$password'");

		if ($data->num_rows > 0) {
			$_SESSION["email"] = $email;
			$_SESSION["loggedIn"] = 1;
			
            header("Location: ../../pages/dashboard.php");
			exit();

		} else {
			
			header("Location: ../../pages/login-page.php");
        }  
	}
	mysqli_close($connection);
?>