<?php
include_once("../../assets/php/scripts/logincheck.php");

function criarConteudoCardServico($id, $corTexto)
{
    include("../../assets/php/scripts/conexao.php");

    $sql = "SELECT idEspecialidade, nomeEspecialidade FROM Especialidades WHERE idArea = $id";

    $consulta = $conexao->query($sql);
    
    //pecorrendo os registros da consulta. 
    while ($dados = mysqli_fetch_assoc($consulta)) {

    echo "<div class='card no-transition'>
            <div class='card-body'>
                <div class='clearfix'></div>
                <h6 class='card-title texto-preto float-left'>" . utf8_encode($dados['nomeEspecialidade']) . "</h6>
                <a href='#' class='btn btn-". $corTexto ." btn-round float-right texto-preto'>Escolher<i class='fas fa-arrow-right ml-2'></i></a>
            </div>
        </div>";
        
    }
}

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
    <!--    navbar come here          -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="services-page.php">
                            <i class="fas fa-cash-register"></i>
                            <p>Meus Serviços</p>
                        </a>
                    </li>
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
                    <h1 class="title text-success text-uppercase font-weight-bold">Peça uma profissional</h1>
                </div>
                <h2 class="text-center font-weight-bold texto-preto mb-5">Escolha uma área de atuação e um tipo de
                    serviço.</h2>
            </div>
        </div>

        <div class="section-dark">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="text-center text-white font-weight-normal text-uppercase">escolha uma área</h2>
                        <div class="mb-3 mt-3 mx-auto">
                            <ul class="nav nav-tabs">
                                <li class="row mb-2 mr-auto ml-auto">
                                    <a class="btn btn-warning texto-preto btn-round m-1" data-toggle="tab"
                                        href="#eletrica">
                                        <i class="fas fa-bolt"></i> Elétrica
                                    </a>
                                    <a class="btn btn-primary texto-preto btn-round m-1" data-toggle="tab"
                                        href="#hidraulica">
                                        <i class="fa fa-tint"></i> Hidráulica
                                    </a>
                                </li>
                                <li class="row mb-2 mr-auto ml-auto">
                                    <a class="btn btn-success texto-preto btn-round m-1" data-toggle="tab"
                                        href="#pintura">
                                        <i class="fas fa-brush mr-1"></i> Pintura
                                    </a>
                                    <a class="btn btn-danger texto-preto btn-round m-1" data-toggle="tab"
                                        href="#instalacao">
                                        <i class="fas fa-screwdriver mr-1"></i> Instalação
                                    </a>
                                </li>
                                <li class="row mb-2 mr-auto ml-auto">
                                    <a class="btn btn-default texto-preto btn-round m-1" data-toggle="tab"
                                        href="#montagem">
                                        <i class="fas fa-tools mr-1"></i> Montagem de Móveis
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto">
                        <div class="tab-content">
                            <div id="eletrica" class="tab-pane text-center fade mt-5">
                                <?php
                              criarConteudoCardServico(1, "warning ");
                              ?>
                            </div>
                            <div id="hidraulica" class="tab-pane text-center fade mt-5">
                                <?php
                              criarConteudoCardServico(2, "primary ");
                              ?>
                            </div>
                            <div id="pintura" class="tab-pane text-center fade mt-5">
                                <?php
                           criarConteudoCardServico(3, "success ");
                           ?>
                            </div>
                            <div id="instalacao" class="tab-pane text-center fade mt-5">
                                <?php
                           criarConteudoCardServico(4, "danger ");
                           ?>
                            </div>
                            <div id="montagem" class="tab-pane text-center fade mt-5">
                                <?php
                              criarConteudoCardServico(5, "default ");
                              ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Modal Bodies come here -->
    <!-- Small modal -->
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