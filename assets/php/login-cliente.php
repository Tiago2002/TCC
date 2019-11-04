<?php
	if (isset($_POST["txtEmail"]) || isset($_POST["txtPassword"])){

		session_start();

		include('conexao.php');
		
		$email = $conexao->real_escape_string($_POST["txtEmail"]);
		$password = md5($conexao->real_escape_string($_POST["txtPassword"]));

		$data = $conexao->query("SELECT nomeCliente FROM Clientes WHERE emailCliente='$email' AND senhaCliente='$password'");

		if ($data->num_rows > 0) {
			$_SESSION["email"] = $email;
			$_SESSION["loggedIn"] = 1;

			header("Location: ../../pages/homepage.php");
			exit();

		} else {
			header("Location: ../../pages/login-page.php");
			exit();
		}
		mysqli_close($conexao);  	
	}else{
		header("Location: ../../index.php");
	}
?>