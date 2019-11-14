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

    <nav class="navbar navbar-expand-lg bg-dark mb-5">
        <a href="../index.php" class="btn btn-success btn-round texto-preto ml-2"><i
                class="fas fa-arrow-left mr-2"></i>Voltar</a>
    </nav>

    <div class="container">
        <div class="col-md-4 mx-auto">

            <div class="text-center mt-5 mb-5">
                <h3 class="texto-preto font-weight-bold">
                    Entre com sua conta da D'elas.
                </h3>
            </div>
            <?php
            if(isset($_GET["tipo"])){
                if($_GET["tipo"] == 0 || $_GET["tipo"] ==1){
                    if ($_GET["tipo"] == 0) {
                        echo "<span class='mb-2 badge badge-pill badge-warning' data-container='body' data-toggle='popover' data-placement='top' data-content='Você será logado como Prestadora'>Entrando como Prestadora</span>";
                      } else {
                        echo "<span class='mb-2 badge badge-pill badge-warning' data-container='body' data-toggle='popover' data-placement='top' data-content='Você será logado como Cliente'>Entrando como cliente</span>";
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

            <form id="form-login" method="POST" <?php
                if ($_GET["tipo"] == 0) {
                    echo "action='../assets/php/prestadora/login-prestadora.php'";
                  } else {
                    echo "action='../assets/php/cliente/login-cliente.php'";
                  }
            ?>>
                <div class="form-group">
                    <h6 class="texto-preto">Endereço de email</h6>
                    <div class="input-group">
                        <input type="text" class="form-control border"<?php
                        if ($_GET["tipo"] == 0) {
                            echo "id='emailLoginPrestadora'";
                        }else{
                            echo "id='emailLoginCliente'";
                        }
                        ?> name="txtEmail" placeholder="Endereço de email">
                    </div>
                    <div class="alert alert-danger alerta-email mt-3" role="alert">
                        <h6 class="mt-2">Insira um email válido</h6>
                    </div>
                </div>

                <div class="form-group">
                    <h6 class="texto-preto">Senha</h6>
                    <div class="input-group">
                        <input type="password" placeholder="Senha" <?php
                        if ($_GET["tipo"] == 0) {
                            echo "id='senhaLoginPrestadora'";
                        }else{
                            echo "id='senhaLoginCliente'";
                        }
                        ?> name="txtPassword"
                            class="form-control border">
                    </div>
                </div>
                <div class="alert alert-danger alerta-login" role="alert">
                    <h6 class="mt-2">Email ou Senha incorretos</h6>
                </div>
            </form>
            <small>
                <a href="" data-toggle="modal" data-target=".modal-recuperacao"
                    class="btn btn-warning texto-preto h6">Esqueci minha senha</a>
            </small>

            <button class="btn btn-success btn-lg btn-block btn-round texto-preto mt-2 mb-3" <?php
                if ($_GET["tipo"] == 0){
                    echo "id='btn-loginPrestadora'";
                }else{
                    echo "id='btn-loginCliente'";
                }
            ?>>
                Entrar
            </button>

            <h6 class="texto-preto">não tem conta ?</h6><a href="#" data-toggle="modal" data-target=".modal-cadastro"
                class="text-success h6">Criar conta</a>
        </div>

    </div>
    </div>

    <div class="modal fade modal-cadastro" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="texto-preto font-weight-bold">Cadastrar-se</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <div class="left-side">
                        <a href="register-page.php?tipo=0" class="btn btn-success btn-link">Para Trabalhar</a>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <a href="register-page.php?tipo=1" class="btn btn-success btn-link">Para solicitar
                            serviço</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-recuperacao" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="texto-preto font-weight-bold">Recuperar Senha</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <div class="left-side">
                        <a href="recuperar-senha.php?tipo=0" class="btn btn-success btn-link">Sou Trabalhadora</a>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <a href="recuperar-senha.php?tipo=1" class="btn btn-success btn-link">Sou Cliente</a>
                    </div>
                </div>
            </div>
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
    <script src="../assets/js/estilo/login.js"></script>
</body>

</html>