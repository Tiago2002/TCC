<?php

require_once("../scripts/logincheck-cliente.php");
 
require("../scripts/conexao.php");
 

$avaliacao = $_POST['numAvaliacao'];
$idServico = $_POST['idServico'];

$queryAvaliacao = "UPDATE Servicos SET aprCliente = 1, avaliaServico = $avaliacao WHERE idServico = $idServico";
var_dump($queryAvaliacao);
mysqli_query($conexao, $queryAvaliacao);

header('Location: ../../../pages/cliente/services-page.php');
exit();