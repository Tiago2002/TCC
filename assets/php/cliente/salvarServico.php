<?php
require_once("../scripts/logincheck-cliente.php");
 
require("../scripts/conexao.php");
 
$emailSessao = $_SESSION['email'];  

$pesquisa = "SELECT t1.idCliente as id, t1.*, t2.* FROM Clientes t1
JOIN End_Clientes t2 on (t1.idCliente = t2.idCliente)
WHERE emailCliente = '$emailSessao'";
$result = $conexao->query($pesquisa);
$dados = (mysqli_fetch_assoc($result));
 
if($dados['idEnd_Cliente'] == NULL){
 
}else{
    
    $idEnd_Cliente = $dados['idEnd_Cliente'];
    $idArea = $_POST['idArea'];
    $idEspecialidade = $_POST['idEspecialidade'];
    $descricaoServico = $_POST['descricaoServico'];
    $horaServico = $_POST['horarioServico'] . ':00';
    $valor = $_POST['valorTotal'];

    $data = $_POST['dataServico'];
    $dataServico = preg_replace('/[^0-9]/', '-', $data);
	$dataFormatada = date_create_from_format("d-m-Y", "$dataServico")->format("Y-m-d");
    
    $id = $dados['id'];

    $hashFoto = uniqid();
    $ext = strtolower(substr($_FILES['imgServico']['name'],-4)); //Pegando extensão do arquivo
    $new_name = "servico-$hashFoto" . $ext; //Definindo um novo nome para o arquivo
    $dir = '../../img/servicos/'; //Diretório para uploads
    $pasta = '/img/servicos/';
    $caminhoFoto = "$pasta" . "$new_name";
    move_uploaded_file($_FILES['imgServico']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    //adicionar status id 6(aguardando pagamento)

    $queryServiço = "INSERT INTO Servicos (idCliente, idEnd_Cliente, idArea, idEspecialidade, descricaoServico, dataServico, horaServico, idStatus, caminhoFoto, custoServico, dataCriacao, dataAlteracao) 
    VALUES ($id, $idEnd_Cliente, $idArea, $idEspecialidade, '$descricaoServico', '$dataFormatada', '$horaServico', 5, '$caminhoFoto', $valor, now(), now());";
    
    if (mysqli_query($conexao, $queryServiço)) {
            $_SESSION["descricao"] = $_POST['descricaoServico'];
            $_SESSION["data"] = $_POST['dataServico'];
            $_SESSION["hora"] = $_POST['horarioServico'];
            $_SESSION["modulo"] = $_POST['moduloServico'];
            $_SESSION["preco"] = $_POST['precoServico'];
            $_SESSION["caminhoImagem"] = $caminhoFoto;
            $_SESSION["especialidade"] = $_POST['especialidade'];
            $_SESSION["id"] = $dados['id'];
            
            header('Location: ../../../pages/cliente/checkout.php');
            exit();
        } else {
        echo "Erro de atualização: " . mysqli_error($conexao);
        }
    exit();
}   
 
?>