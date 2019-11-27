<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delas, Serviços Rápidos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-kit.min.css" rel="stylesheet" />
    <link href="assets/css/estilo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand"  rel="tooltip"
                    title="Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Delas
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#sobre" class="nav-link"><i class="fas fa-question-circle"></i>Sobre</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" data-parallax="true" style="background-image: url('assets/img/woman.jpg');">

        <div class="container">
            <div class="motto">
                <h1>Experimente o Novo</h1>
                <h3 class="font-weight-normal">Comece a descobir o novo aqui</h3>
                <br />
                <a href="" class="btn btn-neutral btn-round texto-branco" data-toggle="modal" data-target=".modal-cadastro">Cadastre-se</a>
                <button type="button" class="btn btn-neutral btn-round ml-2" data-toggle="modal" data-target=".modal-login">Entrar</button>
            </div>
        </div>
    </div>

    <!--modal login -->
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
                            <a href="pages/login-page.php?tipo=0" class="btn btn-warning btn-link">Como Prestadora</a>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <a href="pages/login-page.php?tipo=1" class="btn btn-warning btn-link">Como cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--modal login -->

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
                            <a href="pages/register-page.php?tipo=0" class="btn btn-warning btn-link">Para Trabalhar</a>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <a href="pages/register-page.php?tipo=1" class="btn btn-warning btn-link">Para solicitar serviço</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="main" id="sobre">
        <div class="section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">O que é o Delas?</h2>
                        <h5 class="description">Delas é uma nova plataforma de contratação de serviços do Brasil.
                            Conectamos as profissionais de todo a cidade de São Paulo com pessoas solicitando serviço,
                            atendendo com qualidade, facilidade e rapidez todos os tipos de necessidade.</h5>
                        <br>
                        
                    </div>
                </div>
                <br />
                <br />
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-warning">
                                <i class="nc-icon nc-badge"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Cadastre-se</h4>
                                <p class="description">Faça o cadastro como prestadora para poder oferecer um serviço,
                                    ou cadastre-se como cliente e desfrute das soluções rápidas para seus problemas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-warning">
                                <i class="nc-icon nc-tap-01"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Resolva</h4>
                                <p>Solicite um serviço, é posivel também agendar, ou escolha um seviço para prestar de
                                    acordo com suas skills</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-warning">
                                <i class="nc-icon nc-chart-bar-32"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Alcance Mais</h4>
                                <p>Aumente sua renda com o delas, ou encontre a solução rapida e facil para seus
                                    problemas </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="section section-dark text-center">
            <div class="container">
                <h2 class="title">Nossa Equipe</h2>
                <div class="row">

                    <div class="card-deck">
                        <div class="col-md-3">
                            <div class="card card-plain">
                                <div class="card">
                                    <a href="#avatar">
                                        <img src="assets/img/edu.jpeg" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#paper-kit">
                                        <div class="author">
                                            <h4 class="card-title">Eduardo Belisia</h4>
                                            <h6 class="card-category">Desenvolvedor</h6>
                                        </div>
                                    </a>
                                    <p class="card-description text-center card-footer">
                                        Teamwork is so important that it is virtually impossible for you to reach the
                                        heights of your capabilities or make the money that you want without becoming
                                        very good at it.
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-plain">
                                <div class="card">
                                    <a href="#avatar">
                                        <img src="./assets/img/fernando.jpg " alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#paper-kit">
                                        <div class="author">
                                            <h4 class="card-title">Fernando Lião</h4>
                                            <h6 class="card-category">Desenvolvedor</h6>
                                        </div>
                                    </a>
                                    <p class="card-description text-center card-footer">
                                        A group becomes a team when each member is sure enough of himself and his
                                        contribution to praise the skill of the others. No one can whistle a symphony.
                                        It takes an orchestra to play it.
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-plain">
                                <div class="card">
                                    <a href="#avatar">
                                        <img src="assets/img/chinaglia.jpeg" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#paper-kit">
                                        <div class="author">
                                            <h4 class="card-title">Gabriel Chinaglia</h4>
                                            <h6 class="card-category">Desenvolvedor</h6>
                                        </div>
                                    </a>
                                    <p class="card-description text-center card-footer">
                                        The strength of the team is each individual member. The strength of each member
                                        is the team. If you can laugh together, you can work together, silence isn’t
                                        golden, it’s deadly.
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-plain">
                                <div class="card">
                                    <a href="#avatar">
                                        <img src="assets/img/tiago.jpeg">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#paper-kit">
                                        <div class="author">
                                            <h4 class="card-title">Tiago Matos</h4>
                                            <h6 class="card-category">Desenvolvedor</h6>
                                        </div>
                                    </a>
                                    <p class="card-description text-center card-footer">
                                        The strength of the team is each individual member. The strength of each member
                                        is the team. If you can laugh together, you can work together, silence isn’t
                                        golden, it’s deadly.
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i
                                            class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
      
    <footer class="footer   footer-white ">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                   
                </nav>
                
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/paper-kit.min.js" type="text/javascript"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
    <!-- scripts pessoais -->
</body>

</html>