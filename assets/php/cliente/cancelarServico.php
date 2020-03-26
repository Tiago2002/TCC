<?php
require_once("../scripts/logincheck-cliente.php");
 
require("../scripts/conexao.php");
 
$idServico = $_POST['idServico'];

$queryDelete = "UPDATE Servicos SET idStatus = 5 WHERE idServico = '$idServico'";

$consultaDelete = $conexao->query($queryDelete);

header('Location: ../../../pages/cliente/services-page.php');
exit();