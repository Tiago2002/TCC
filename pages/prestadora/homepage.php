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
                <a class="navbar-brand" href="homepage.php">delas</a>
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
                        <a class="dropdown-item" href="#"><p class="texto-preto">Visão Geral</p></a>
                                <a class="dropdown-item" href="servicos.php"><p class="texto-preto">Buscar Serviços</p></a>
                                <a class="dropdown-item" href="servicos-atribuidos.php"><p class="texto-preto">Meus Serviços</p></a>
                                <a class="dropdown-item" href="servicos-finalizados.php"><p class="texto-preto">Serviços Finalizados</p></a>
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

        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="title text-success text-uppercase font-weight-bold">Encontre um serviço</h1>
                </div>
                <h3 class="text-center font-weight-bold texto-preto mb-5">Escolha uma área de atuação em seu perfil e comece a ganhar dinheiro.</h3>
            </div>

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
                                <li><a class="btn btn-link btn-default" href="servicos.php">Buscar Serviços</a></li>
                                <li><a class="btn btn-link btn-default" href="servicos-atribuidos.php">Meus Serviços</a></li>
                                <li><a class="btn btn-link btn-default" href="servicos-finalizados.php">Serviços Finalizados</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- fim da div img e menu lateral -->

            <!-- div serviços -->
            <div class="col-md-7 bg-light p-3"></div>
    
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