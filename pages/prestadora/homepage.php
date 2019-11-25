<?php
include_once("../../assets/php/scripts/logincheck.php");

include_once("../../assets/php/scripts/conexao.php");

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
                    <li class="nav-item">
                        <a class="nav-link" href="servicos.php">
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