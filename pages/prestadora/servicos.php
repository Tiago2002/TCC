<?php
include_once("../../assets/php/scripts/logincheck.php");

include_once("../../assets/php/scripts/conexao.php");

$email = $_SESSION["email"];

?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Delas, Serviços Rápidos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/paper-kit.min.css" rel="stylesheet" />
    <link href="../../assets/css/estilo.css" rel="stylesheet" />
</head>

<body>
    <!--    navbar come here   -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="dashboard.php">delas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fas fa-question-circle"></i>
                            <p>Ajuda</p>
                        </a>
                    </li>
                    
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-cash-register" aria-hidden="true"></i><p> Serviços</p>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-success">
                                <a class="dropdown-item" href="#"><p class="texto-preto">Buscar Serviços</p></a>
                                <a class="dropdown-item" href="#"><p class="texto-preto">Meus Serviços</p></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><p class="texto-preto">Outro link</p></a>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="profile-page.php">
                            <i class="fas fa-female"></i>
                            <p>Meu Perfil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../assets/php/scripts/logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Sair</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar  -->

    <div class="wrapper">

        <div class="container">
            <div class="row">

            <!-- div img e menu lateral -->
                <div class="col-md-3">
                    <div class="card no-transition">
                        <div class="card-body">
                            <?php 
                            
                            $queryPrestadora = "SELECT idprestadora as id, nomePrestadora, caminhoFoto 
                            FROM Prestadoras
                            WHERE emailPrestadora = '$email'";

                            $consultaPrestadora = $conexao->query($queryPrestadora);

                            $dadosPrestadora = (mysqli_fetch_assoc($consultaPrestadora));

                            if(isset($dadosPrestadora['caminhoFoto'])){
                                $caminhoFoto = $dadosPrestadora['caminhoFoto'];
                                echo "<img src='../../assets".$caminhoFoto."' alt='Image placeholder' class='card-img-top'>";
                                } else {
                                echo "<img src='../../assets/img/faces/default.png' alt='Image placeholder' class='card-img-top'>";
                                }
                            ?>
                            <ul class="list-unstyled mt-3 mb-1">
                                <a class="btn btn-link btn-success" href="#">Buscar Serviços</a>
                                <a class="btn btn-link btn-default" href="#">Meus Serviços</a>
                                <!--<a class="btn btn-link btn-default" href="#">Outro link</a>-->
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- fim da div img e menu lateral -->

            <!-- div serviços -->
            <div class="col-md-7 bg-light p-3">
                
                <?php

                    $query = "SELECT t1.*, t2.*, t3.*, t5.idCliente, t5.nomeCliente, t6.*, t7.*, date_format(dataServico,'%d/%m/%Y') as dtServ, date_format(horaServico,'%H:%i') as hrServ
                                FROM Servicos t1
                                JOIN Areas t2 ON (t1.idArea = t2.idArea)
                                JOIN Areas_Prestadoras t3 ON (t2.idArea = t3.idArea)
                                JOIN Prestadoras t4 ON (t3.idPrestadora = t4.idPrestadora)
                                JOIN Clientes t5 ON (t1.idCliente = t5.idCliente)
                                JOIN End_Clientes t6 ON (t5.idCliente = t6.idCliente)
                                JOIN Especialidades t7 ON (t1.idEspecialidade = t7.idEspecialidade)
                                WHERE t1.idPrestadora IS NULL AND t3.ativo = 1 AND t3.idPrestadora IS NOT NULL 
                                AND t4.emailPrestadora = '$email' ORDER BY t1.dataCriacao DESC LIMIT 10";
                    
                    if($consulta = $conexao->query($query)){
                        
                        while($servico = $consulta->fetch_assoc()){
                            echo "<div class='card no-transition'>";
                                echo "<div class='card-body'>";
                                        echo "<h3 class='texto-preto font-weight-bold mb-2'>".utf8_encode($servico['nomeEspecialidade'])."</h3>";
                                        echo "<h6 class='float-left'>";
                            $datetime1 = new DateTime($servico['dataCriacao']);//start time
                            $datetime2 = new DateTime(date());//end time
                            $interval = $datetime1->diff($datetime2);
                            if($interval->d == 0){
                                if($interval->h == 0){
                                    if($interval->i == 1){
                                    echo $interval->format('Há %i minuto');
                                    } if($interval->i > 1){
                                        echo $interval->format('Há %i minutos');
                                    }
                                }if($interval->h == 1){
                                    echo $interval->format('Há %H hora');
                                }if($interval->h > 1){
                                echo $interval->format('Há %H horas');
                                }
                            }if($interval->d == 1){
                                if($interval->h == 0){
                                    if($interval->i == 1){
                                    echo $interval->format('Há %d dia e %i minuto');
                                    } if($interval->i > 1){
                                        echo $interval->format('Há %d dia e %i minutos');
                                    }
                                }if($interval->h == 1){
                                    echo $interval->format('Há %d dia e %H hora');
                                    }if($interval->h > 1){
                                echo $interval->format('Há %d dia e %H horas');
                                }
                            }if($interval->d >= 2){
                                if($interval->h == 0){
                                    if($interval->i == 1){
                                    echo $interval->format('Há %d dias e %i minuto');
                                    } if($interval->i > 1){
                                        echo $interval->format('Há %d dias e %i minutos');
                                    }
                                }if($interval->h == 1){
                                    echo $interval->format('Há %d dias e %H hora');
                                    }if($interval->h > 1){
                                echo $interval->format('Há %d dias e %H horas');
                                }
                            }
                                    echo "</h6>";
                                    echo "<h6 class='float-right'>".utf8_encode($servico['nomeArea'])."</h6>";
                                echo "<div class='clearfix'></div>";
                                        echo "<hr>";
                                    echo "<h6 class='badge badge-pill badge-warning font-weight-bold texto-preto float-left'>".utf8_encode($servico['bairro'])."</h6>";
                                                echo "<h6 class='badge badge-pill badge-warning font-weight-bold texto-preto float-left ml-2'>R$: ".$servico['custoServico']."</h6>";
                                        echo "<div class='clearfix'></div>";
                                                echo "<h6 class='badge badge-pill badge-warning font-weight-bold texto-preto mt-2 mb-2'>";
                                                echo $servico['nomeCliente']."</h6>";
                                        echo "<div class='clearfix'></div>";
                                    echo "<h6 class='badge badge-pill badge-warning font-weight-bold texto-preto float-left'>".$servico['dtServ']."</h6>";
                                                echo "<h6 class='badge badge-pill badge-warning font-weight-bold texto-preto float-left ml-2'>".$servico['hrServ']."</h6>";
                                        echo "<div class='clearfix'></div>";
                                        echo "<button class='btn btn-success btn-round texto-preto mt-2' data-toggle='collapse'";
                                                echo "href='#collapseExample".$servico['idServico']."' aria-expanded='false' aria-controls='collapseExample".$servico['idServico']."'>Ver mais<i class='fas fa-image ml-2'></i>";
                                        echo "</button>";
                                        echo "<div class='collapse' id='collapseExample".$servico['idServico']."'>";
                                                echo "<div class='col-sm-10 col-md-10 mx-auto'>";
                                                    echo "<p class='mb-2 mt-2 texto-preto font-weight-normal'>";
                                                        echo $servico['descricaoServico'];
                                                    echo "</p>";
                                                echo "</div>";
                                                echo "<form action='../../assets/php/prestadora/manipular-servico.php' method='POST'>";

                                                echo "<input type='hidden' name='idServico' value='".$servico['idServico']."'>";

                                        echo "</div>";
                                        echo "<button type='sumbit' onclick='confirmacao()' name='btnServico' class='btn btn-success btn-round texto-preto float-right mt-2'>Aceitar Serviço</button>";
                                        echo "</form>";
                                    echo "</div>";
                                echo "</div>";
                        }
                        $consulta->free();
                    }
                    $conexao->close();
                ?>

<script>
function confirmacao() {
  alert("Negocio fechado!");
}
</script>

            <!-- fim da div serviços -->

    <!-- Modal Bodies come here -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header no-border-header">
                    <h6 class="text-danger">Alerta !!</h6>
                </div>
                <div class="modal-body text-center">
                    <h5>Complete as informações do seu perfil primeiro!</h5>
                </div>
                <div class="modal-footer">
                    <div class="left-side">
                        <button type="button" class="btn btn-default btn-link" data-dismiss="modal">depois!</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <a href="profile-page.php" class="btn btn-danger btn-link">OK!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   end modal -->
</body>



<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../../assets/js/plugins/moment.min.js"></script>
<script src="../../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="../../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
<!-- scripts pessoais -->

</html>