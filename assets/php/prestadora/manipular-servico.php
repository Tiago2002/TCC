<?php
    require_once("../scripts/logincheck.php");

    require("../scripts/conexao.php");

    $emailSessao = $_SESSION['email'];
    

    $pesquisa = "SELECT idPrestadora as id FROM Prestadoras WHERE emailPrestadora = '$emailSessao'";
	$result = $conexao->query($pesquisa);
	$dados = (mysqli_fetch_assoc($result));

    if(isset($_POST['btnServico'])){

        $idServico = $_POST['idServico'];
        $id = $dados['id'];

        $update = "UPDATE Servicos SET idPrestadora = $id, dataAlteracao = now() WHERE idServico = $idServico";

        if (mysqli_query($conexao, $update)) {
			echo "Dados atualizados com sucesso!";
			header("Location: ../../../pages/prestadora/servicos.php");
		 } else {
			echo "Erro de atualização: " . mysqli_error($conexao);
		 }
		exit();

    }
	mysqli_close($conexao);
?>