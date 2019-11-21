<?php
	require_once("../scripts/logincheck.php");

	require("../scripts/conexao.php");

	$emailSessao = $_SESSION['email'];

	$pesquisa = "SELECT idCliente as id FROM Clientes WHERE emailCliente = '$emailSessao'";
	$result = $conexao->query($pesquisa);
	$dados = (mysqli_fetch_assoc($result));

	$id = $dados['id'];

	
	if(isset($_POST['btnInfo'])){

		$nome = strtoupper($conexao->real_escape_string($_POST["txtNome"]));
		$cpf = $conexao->real_escape_string($_POST["cpf"]);
		$emailCliente = strtolower($conexao->real_escape_string($_POST["txtEmail"]));
		$telefone = $conexao->real_escape_string($_POST["txtTelefone"]);
		$nasc = $conexao->real_escape_string($_POST["txtNascimento"]);
		$dataNascimento = preg_replace('/[^0-9]/', '-', $nasc);	
		$dtNasc = date_create_from_format("d-m-Y", "$dataNascimento")->format("Y-m-d");
	
		$sql = "UPDATE Clientes SET nomeCliente = '$nome', cpfCliente = '$cpf', telCliente = '$telefone', dtNascCliente = '$dtNasc', emailCliente = '$emailCliente' WHERE emailCliente = '$emailSessao'";
		
		if (mysqli_query($conexao, $sql)) {
			echo "Dados atualizados com sucesso!";
			header("Location: ../../../pages/cliente/profile-page.php");
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

		$queryVerifica = "SELECT idEnd_Cliente FROM End_Clientes WHERE idCliente = '$id' LIMIT 1";
		$result = mysqli_query($conexao,$queryVerifica);
		$total = mysqli_num_rows($result);

		if($total === 1){

			$sql = "UPDATE End_Clientes SET CEP = '$cep', logradouro = '$logradouro', complemento = '$complemento',
			numero = '$numero', bairro = '$bairro', localidade = '$localidade', uf = '$uf' WHERE idCliente = '$id'";

			if (mysqli_query($conexao, $sql)) {
				echo "Dados atualizados com sucesso!";
				header("Location: ../../../pages/cliente/profile-page.php");
			} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
			}
			exit();

		}
		if($total === 0){

			$sql = "INSERT INTO End_Clientes (CEP, logradouro, complemento, numero, bairro, localidade, uf, idCliente) 
			VALUES ('$cep', '$logradouro', '$complemento', '$numero', '$bairro', '$localidade', '$uf', '$id')";

			if (mysqli_query($conexao, $sql)) {
				echo "Dados inseridos com sucesso!";
				header("Location: ../../../pages/cliente/profile-page.php");
			} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
			}
			exit();
			
		}
	}

	else if(isset($_POST['btnImgPerfil'])){

		if(isset($_FILES['imgPerfil'])){

			$ext = strtolower(substr($_FILES['imgPerfil']['name'],-4)); //Pegando extensão do arquivo
			$new_name = "cliente-$id" . $ext; //Definindo um novo nome para o arquivo
			$dir = '../../img/clientes/'; //Diretório para uploads
			$pasta = '/img/clientes/';
			$caminhoFoto = "$pasta" . "$new_name";
			move_uploaded_file($_FILES['imgPerfil']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
			echo("Imagem enviada com sucesso!");

			$query = "UPDATE Clientes SET caminhoFoto = '$caminhoFoto' WHERE idCliente = $id";

			if (mysqli_query($conexao, $query)) {
				echo "Dados atualizados com sucesso!";
				header("Location: ../../../pages/cliente/profile-page.php");
				} else {
				echo "Erro de atualização: " . mysqli_error($conexao);
				}
			exit();
 		} 

	}

	mysqli_close($conexao);
?>