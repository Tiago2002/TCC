<?php
	session_start();
	if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])) {
			header("Location: ../../index.php");
			exit();
	} if ($_SESSION["type"] != 1){
		header("Location: ../../pages/cliente/homepage.php");
		exit();
	}
?>