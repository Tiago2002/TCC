<?php
	session_start();
	if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])) {
			header("Location: ../../index.php");
			exit();
	} if ($_SESSION["type"] != 2){
		header("Location: ../../pages/prestadora/homepage.php");
		exit();
	}
?>