<?php
	require ("../assets/php/logincheck.php");
?>

<?php
   function criarConteudoCardServico($id, $corTexto)
   {
       //iniciando a conexão com o banco de dados 
       $conexao = mysqli_connect("localhost", "root", "");
       
       //selecionando o banco de dados 
       $banco = mysqli_select_db($conexao, "dbProjetoTCC");
       
       //criando a query de consulta à tabela criada 
       $consulta = mysqli_query($conexao, "SELECT idEspecialidade, nomeEspecialidade FROM Especialidades WHERE idArea = $id") or die(mysqli_error($conexao) //caso haja um erro na consulta 
           );
       
       //pecorrendo os registros da consulta. 
       while ($dados = mysqli_fetch_assoc($consulta)) {
           echo "<a href='#' class='card card-selecao-servico' data-toggle='modal'
           data-target='.bd-example-modal-sm'>
           <div class='card-body'>
               <h6 class='card-title " . $corTexto . "'>" . utf8_encode($dados['nomeEspecialidade']) . "</h6>
           </div>
       </a>";
           
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-kit.min.css" rel="stylesheet" />
    <link href="../assets/css/estilo.css" rel="stylesheet" />
</head>

<body>
    <!--    navbar come here          -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="dashboard.php">delas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-primary">
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
                        <a class="nav-link" href="../assets/php/logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Sair</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar  -->
    <div class="wrapper mt-5">
        <div class="container">

            <div class="card text-center" data-background="color" data-color="brown" data-radius="none">
                <div class="card-body">
                    <h6 class="card-category text-black">25/10/2019</h6>
                    <h4 class="card-title">
                        <a href="#">Seja bem vindo, Usuario</a>
                    </h4>
                    <p class="card-description">peça um serviço a qualquer momento, há diversas profissionais esperando por você</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <h2 class="text-center">Não perca tempo e escolha uma área</h2>
                    <div class="mb-3 mt-3 mx-auto">
                        <ul class="nav nav-tabs">
                            <li class="row mb-2 mr-auto ml-auto">
                                <a class="btn btn-outline-warning btn-round m-1" data-toggle="tab" href="#eletrica">
                                    <i class="fas fa-bolt"></i> Elétrica
                                </a>
                                <a class="btn btn-outline-primary btn-round m-1" data-toggle="tab" href="#hidraulica">
                                    <i class="fa fa-tint"></i> Hidráulica
                                </a>
                            </li>
                            <li class="row mb-2 mr-auto ml-auto">
                                <a class="btn btn-outline-success btn-round m-1" data-toggle="tab" href="#pintura">
                                    <i class="fas fa-brush mr-1"></i> Pintura
                                </a>
                                <a class="btn btn-outline-danger btn-round m-1" data-toggle="tab" href="#instalacao">
                                    <i class="fas fa-screwdriver mr-1"></i> Instalação
                                </a>
                            </li>
                            <li class="row mb-2 mr-auto ml-auto">
                                <a class="btn btn-outline-default btn-round m-1" data-toggle="tab" href="#montagem">
                                    <i class="fas fa-tools mr-1"></i> Montagem de Móveis
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div id="eletrica" class="tab-pane fade in active">
                            <div class="card-columns">
                                <?php
                              criarConteudoCardServico(1, "text-warning");
                              ?>
                            </div>
                        </div>
                        <div id="hidraulica" class="tab-pane fade">
                            <div class="card-columns">
                                <?php
                              criarConteudoCardServico(2, "text-primary");
                              ?>
                            </div>
                        </div>
                        <div id="pintura" class="tab-pane fade">
                            <?php
                           criarConteudoCardServico(3, "text-success");
                           ?>
                        </div>
                        <div id="instalacao" class="tab-pane fade">
                            <?php
                           criarConteudoCardServico(4, "text-danger");
                           ?>
                        </div>
                        <div id="montagem" class="tab-pane fade">
                            <div class="card-columns">
                                <?php
                        criarConteudoCardServico(5, "text-default");
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
<!-- Core JS Files -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!-- Switches -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugins for Slider -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!--  Plugins for DateTimePicker -->
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datepicker.js"></script>
<!--  Paper Kit Initialization snd functons -->
<script src="../assets/js/paper-kit.min.js"></script>

<script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>

</html>