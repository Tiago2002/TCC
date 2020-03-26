<?php
require_once("../scripts/logincheck-cliente.php");
 
require("../scripts/conexao.php");
 
$caminhoImagem = $_SESSION["caminhoImagem"];

$queryPagamento = "UPDATE Servicos SET idStatus = 3 WHERE caminhoFoto = '$caminhoImagem'";

$consultaPagamento = $conexao->query($queryPagamento);

header('Location: ../../../pages/cliente/services-page.php');
exit();