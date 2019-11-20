<?php
	require_once("../scripts/logincheck.php");

	require("../scripts/conexao.php");

	$emailSessao = $_SESSION['email'];

	$pesquisa = "SELECT idPrestadora as id FROM Prestadoras WHERE emailPrestadora = '$emailSessao'";
	$result = $conexao->query($pesquisa);
	$dados = (mysqli_fetch_assoc($result));

	$id = $dados['id'];

	
	if(isset($_POST['btnInfo'])){

		$nome = strtoupper($conexao->real_escape_string($_POST["txtNome"]));
		$cpf = $conexao->real_escape_string($_POST["cpf"]);
		$emailPrestadora = strtolower($conexao->real_escape_string($_POST["txtEmail"]));
		$telefone = $conexao->real_escape_string($_POST["txtTelefone"]);
		$nasc = $conexao->real_escape_string($_POST["txtNascimento"]);
		$dataNascimento = preg_replace('/[^0-9]/', '-', $nasc);	
		$dtNasc = date_create_from_format("d-m-Y", "$dataNascimento")->format("Y-m-d");
	
		$sql = "UPDATE Prestadoras SET nomePrestadora = '$nome', cpfPrestadora = '$cpf', telPrestadora = '$telefone', dtNascPrestadora = '$dtNasc', emailPrestadora = '$emailPrestadora' WHERE emailPrestadora = '$emailSessao'";
		
		if (mysqli_query($conexao, $sql)) {
			echo "Dados atualizados com sucesso!";
			header("Location: ../../../pages/prestadora/profile-page.php");
		 } else {
			echo "Erro de atualização: " . mysqli_error($conexao);
		 }
		exit();	
	}
	
	else if(isset($_POST['btnEndereco'])){

		$cep = $conexao->real_escape_string($_POST["txtCep"]);
		$complemento = strtoupper($conexao->real_escape_string($_POST["txtComp"]));
		$numero = strtoupper($conexao->real_escape_string($_POST["txtNum"]));
		$logradouro = strtoupper($conexao->real_escape_string($_POST["txtLog"]));
		$bairro = strtoupper($conexao->real_escape_string($_POST["txtBairro"]));
		$localidade = utf8_decode(strtoupper($conexao->real_escape_string($_POST["txtLocal"])));
		$uf = strtoupper($conexao->real_escape_string($_POST["txtUf"]));

		$queryVerifica = "SELECT idEnd_Prestadora FROM End_Prestadoras WHERE idPrestadora = '$id' LIMIT 1";
		$result = mysqli_query($conexao,$queryVerifica);
		$total = mysqli_num_rows($result);

		if($total === 1){

			$sql = "UPDATE End_Prestadoras SET CEP = '$cep', logradouro = '$logradouro', complemento = '$complemento',
			numero = '$numero', bairro = '$bairro', localidade = '$localidade', uf = '$uf' WHERE idPrestadora = '$id'";

			if (mysqli_query($conexao, $sql)) {
				echo "Dados atualizados com sucesso!";
				header("Location: ../../../pages/prestadora/profile-page.php");
			} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
			}
			exit();

		}
		if($total === 0){

			$sql = "INSERT INTO End_Prestadoras (CEP, logradouro, complemento, numero, bairro, localidade, uf, idPrestadora) 
			VALUES ('$cep', '$logradouro', '$complemento', '$numero', '$bairro', '$localidade', '$uf', '$id')";

			if (mysqli_query($conexao, $sql)) {
				echo "Dados inseridos com sucesso!";
				header("Location: ../../../pages/prestadora/profile-page.php");
			} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
			}
			exit();
			
		}
	}

	else if(isset($_POST['btnArea'])){

		$sqlUpdateAreas = "UPDATE Areas_Prestadoras SET ativo = 0 WHERE idPrestadora = '$id'";

			if (mysqli_query($conexao, $sqlUpdateAreas)) {
				echo "Dados atualizados com sucesso!";
			} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
			}
		
		foreach($_POST['opcao'] as $_op){
			$sqlUpdateAtivo = "UPDATE Areas_Prestadoras SET ativo = 1 WHERE idPrestadora = $id AND idArea = $_op";
			
			if (mysqli_query($conexao, $sqlUpdateAtivo)) {
				echo "Dados atualizados com sucesso!";
				header("Location: ../../../pages/prestadora/profile-page.php");
				} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
				}	

		}
		exit();
	}

	else if(isset($_POST['btnDadosBancarios'])){

		$idBanco = $conexao->real_escape_string($_POST["selectBanco"]);
		$agenciaBanco = $conexao->real_escape_string($_POST["txtAgBanco"]);
		$contaBanco = $conexao->real_escape_string($_POST["txtContaBanco"]);

		$queryDadosBanc = "UPDATE Prestadoras SET idBanco = $idBanco, agenciaBanco = $agenciaBanco, contaBanco = '$contaBanco' WHERE idPrestadora = $id";

		if (mysqli_query($conexao, $queryDadosBanc)) {
			echo "Dados atualizados com sucesso!";
			header("Location: ../../../pages/prestadora/profile-page.php");
			} else {
			echo "Erro de atualização: " . mysqli_error($conexao);
			}
		exit();
	}
	mysqli_close($conexao);
?>