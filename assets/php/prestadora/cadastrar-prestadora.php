<?php
if (isset($_POST["txtName"]) || isset($_POST["txtTel"]) || isset($_POST["txtEmail"]) || isset($_POST["txtPassword"])) {
    include_once('../scripts/conexao.php');
    
    $name     = strtoupper($conexao->real_escape_string($_POST["txtName"]));
    $tel      = $conexao->real_escape_string($_POST["txtTel"]);
    $email    = strtolower($conexao->real_escape_string($_POST["txtEmail"]));
    $password = md5($conexao->real_escape_string($_POST["txtPassword"]));
    $mascara  = array(" ", "-");
    $telefone = str_replace($mascara, "", $tel);

    $sql = "INSERT INTO Prestadoras (nomePrestadora, telPrestadora, emailPrestadora, senhaPrestadora, dtCadastro) VALUES ('$name', '$telefone', '$email', '$password', NOW())";
    
    $data = $conexao->query($sql);

    $queryVerifica = "SELECT idArea, t2.idPrestadora as idPre FROM Areas_Prestadoras t1
        RIGHT JOIN Prestadoras t2 on (t1.idPrestadora = t2.idPrestadora)
		WHERE emailPrestadora = '$email'";
		$result = mysqli_query($conexao,$queryVerifica);
		$verify = (mysqli_fetch_assoc($result));
        $rows = $result->num_rows;
        $idPrestadora = $verify['idPre'];

		if($rows == 1){
			$queryAreas = "SELECT idArea FROM Areas";

			if ($arrayAreas = $conexao->query($queryAreas));
			
				while($atrArea = $arrayAreas->fetch_assoc()){
					$areaTbArea = $atrArea["idArea"];

					$insertAreas = "INSERT INTO Areas_Prestadoras (idArea, idPrestadora, ativo) VALUES ('$areaTbArea', '$idPrestadora', 0)";
                    
					if (mysqli_query($conexao, $insertAreas)) {
						echo "Dados inseridos com sucesso!";
					} else {
						echo "Erro de atualização: " . mysqli_error($conexao);
					}
				}
	
			}

    include_once("./login-prestadora.php");

    mysqli_close($conexao);

    } else {
        header("location: ../../../index.php");
    }

?>