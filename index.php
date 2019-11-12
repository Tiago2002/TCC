<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Delas - Registre-se
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-kit.min.css?v=2.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
</head>

<div>

<body>

    <div class="container">
        <a href="#" class="btn btn-outline-primary btn-round" data-toggle="modal" data-target=".modal-login">
            <i class="fas fa-sign-in-alt"></i>
            Entrar
        </a>
        <a href="#" class="btn btn-outline-primary btn-round" data-toggle="modal" data-target=".modal-cadastro">
            <i class="fas fa-user-plus"></i>
            Registrar
        </a>
    </div>

    <body>

        <!-- Modal -->

        <!-- Large modal -->
        <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1>Entrar...</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <div class="left-side">
                            <a href="pages/login-page.php?tipo=0" class="btn btn-primary btn-link">Como Prestadora</a>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <a href="pages/login-page.php?tipo=1" class="btn btn-danger btn-link">Como cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-cadastro" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <div class="modal-header">
                        <h2>Cadastre-se...</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <div class="left-side">
                            <a href="pages/register-page.php?tipo=0" class="btn btn-primary btn-link">Para Trabalhar</a>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <a href="pages/register-page.php?tipo=1" class="btn btn-danger btn-link">Para solicitar serviço</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="./assets/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="./assets/js/plugins/moment.min.js"></script>
        <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
    </body>

</html>