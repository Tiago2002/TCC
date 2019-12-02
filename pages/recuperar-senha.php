<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Delas - Entrar
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-kit.min.css?v=2.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <link href="../assets/css/estilo.css" rel="stylesheet" />
</head>

<body>

<nav class="navbar navbar-expand-lg bg-primary">
        <a onclick="window.history.back()" class="btn btn-warning text-white btn-round ml-2"><i
                class="fas fa-arrow-left mr-2"></i>Voltar</a>
    </nav>

    <div class="container p-5 mt-5">
        <h1 class="text-uppercase text-center text-primary font-weight-bold">Alterar Senha</h1>

        <div class="col-md-6 mt-3 mx-auto">

            <?php
                if(isset($_GET["tipo"])){
                    if($_GET["tipo"] == 0 || $_GET["tipo"] ==1){
                        if ($_GET["tipo"] == 0) {
                            echo "<span class='mb-2 badge badge-pill badge-warning container' data-container='body' data-toggle='popover' data-placement='top' data-content='Prestadora'>Prestadora</span>";
                        } else {
                            echo "<span class='mb-2 badge badge-pill badge-warning container' data-container='body' data-toggle='popover' data-placement='top' data-content='Cliente'>Cliente</span>";
                        }
                    }
                    else{
                        header("location: ../index.php");
                    }
                }
                else{
                    header("location: ../index.php");
                }
            ?>

            <form id="form-recuperacao" method="POST" <?php
            if(isset($_GET["tipo"])){
                if($_GET["tipo"] == 0 || $_GET["tipo"] ==1){
                    if ($_GET["tipo"] == 0) {
                        echo "action=''";
                    } else {
                        echo "action=''";
                    }
                }
                else{
                    header("location: ../index.php");
                }
            }
            else{
                header("location: ../index.php");
            }
            ?>>
                <h6>Confirme o email cadastrado</h6>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="emailRecuperacao" name="txtEmail"
                            placeholder="Insira o email cadastrado" required>
                    </div>
                    <div class="alert alert-warning text-primary alerta-email mt-3" role="alert">
                        <h6 class="mt-2">Insira um email válido</h6>
                    </div>
                    <div class="alert alert-warning text-primary alerta-reset mt-3" role="alert">
                        <h6 class="mt-2" id="msg-alerta-reset">Email não está cadastradado</h6>
                    </div>
                    <div class="alert alert-warning text-primary alerta-enviado mt-3" role="alert">
                        <h6 class="mt-2">Verifique seu email para redefinir sua senha</h6>
                    </div>
                </div>
            </form>

            <div class="circle-loading container mb-3"></div>

            <button class="btn btn-warning btn-lg btn-block mt-3 mb-3"<?php
                if ($_GET["tipo"] == 0) {
                    echo "id='btn-recuperacaoPrestadora'";
                } else {
                    echo "id='btn-recuperacaoCliente'";
                }
            ?>>Redefinir Senha</button>
        </div>

    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
    <!-- scripts pessoais-->
    <script src="../assets/js/estilo/validacoes.js"></script>
    <script src="../assets/js/estilo/recuperacao.js"></script>
</body>

</html>