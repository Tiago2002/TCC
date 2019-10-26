<?php
	require ("../assets/php/logincheck.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Meus Serviços</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-kit.css" rel="stylesheet" />
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

    <div class="wrapper sec-servicos">

        <div class="row">

            <div class="col-sm-7">
                <div class="lista-servicos-feitos m-5">
                    <div class="pb-1 bg-dark text-center text-white">
                        <h2>Serviços</h2>
                    </div>

                    <div class="dropdown">
                        <button class="mt-3 mb-3 btn btn-outline-default btn-round" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-filter"></i>
                            Filtrar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Filtro1</a>
                            <a class="dropdown-item" href="#">Filtro2</a>
                            <a class="dropdown-item" href="#">Filtro3</a>
                        </div>
                    </div>

                    <div class="servicos-feitos">

                        <div id="acordeao" role="tablist" aria-multiselectable="true">
                            <div class="item-servico-feito mb-3" role="tab" id="item_1" role="button"
                                data-toggle="collapse" data-parent="#acordeao" href="#corpo_item_1" aria-expanded="true"
                                aria-controls="corpo_item_1">
                                <div class="header-servico-feito" id="item-1" data-toggle="collapse"
                                    data-target="#corpo_item_1" aria-expanded="true" aria-controls="corpo_item_1">
                                    <div class="card-servico-feito card">
                                        <div class="card-body">
                                            <div class="titulo-servico-feito mb-3">
                                                <div class="row">
                                                    <h6 class="font-weight-normal text-uppercase ml-5 mt-2">12 de
                                                        outubro de
                                                        2019
                                                    </h6>
                                                    <h6 class="font-weight-normal text-uppercase ml-auto mr-5">São Paulo
                                                        <svg class="mb-2" width="30" height="30" x="0px" y="0px" wid
                                                            viewBox="0 0 511.999 511.999"
                                                            style="enable-background:new 0 0 511.999 511.999;">
                                                            <path style="fill:#44C868;"
                                                                d="M511.879,475.685l-40.224-221.611c-0.401-2.212-1.773-4.128-3.739-5.221l-101.242-56.31
                                                                                                                                c-1.314-0.732-2.787-1.023-4.234-0.911l18.419,237.608l-0.617,0.276l121.164,54.357c0.986,0.441,2.034,0.659,3.077,0.659
                                                                                                                                c1.651,0,3.287-0.543,4.632-1.596C511.313,481.22,512.376,478.428,511.879,475.685z" />
                                                            <path style="fill:#44C868;"
                                                                d="M256,246.375l-103.545-53.931c-1.241-0.647-2.617-0.911-3.972-0.82
                                                                                                                                c0.359-0.022,0.72-0.02,1.078,0.008l-18.419,237.608l121.781,54.634c0.983,0.44,2.032,0.659,3.077,0.659l0,0V246.375z" />
                                                            <path style="fill:#4CE166;"
                                                                d="M149.56,191.633c-1.447-0.112-2.92,0.179-4.234,0.91l-101.243,56.31
                                                                                                                                c-1.966,1.093-3.338,3.008-3.739,5.221L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252c1.347,1.053,2.982,1.596,4.632,1.596
                                                                                                                                c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L149.56,191.633z" />
                                                            <path style="fill:#4CE166;"
                                                                d="M362.439,191.628c-0.996,0.077-1.981,0.342-2.894,0.818L256,246.376v238.158c0,0,0,0,0.001,0
                                                                                                                                c1.045,0,2.095-0.218,3.077-0.659l121.781-54.634L362.439,191.628z" />
                                                            <polygon style="fill:#FFDB56;"
                                                                points="28.154,321.233 19.983,366.252 140.977,302.346 143.786,266.107 144.252,260.097 " />
                                                            <path style="fill:#A8EEFC;"
                                                                d="M142.066,288.294l-1.089,14.052L19.983,366.252L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252
                                                                                                                            c1.347,1.053,2.982,1.596,4.632,1.596c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L142.066,288.294L142.066,288.294z" />
                                                            <polygon style="fill:#FFBB24;"
                                                                points="256.03,276.08 144.252,260.097 140.977,302.346 256,477.025 256,413.507 187.363,305.429 
                                                                                                                                256.03,313.642 	" />
                                                            <polygon style="fill:#FFBB24;"
                                                                points="459.946,244.421 411.311,217.37 365.269,228.128 365.845,235.564 368.119,264.898 	" />
                                                            <polygon style="fill:#FFDB56;"
                                                                points="372.202,317.576 367.842,261.327 367.842,261.327 365.269,228.128 256.03,276.08 
                                                                                                                            256.03,313.642 327.386,282.612 " />
                                                            <path style="fill:#FFBB24;"
                                                                d="M511.879,475.685l-10.103-55.666L368.119,264.898l4.084,52.678l137.07,165.221
                                                                                                                            C511.357,481.07,512.364,478.358,511.879,475.685z" />
                                                            <path style="fill:#FF4A4A;"
                                                                d="M256.481,27.465c-57.963,0-105.12,47.118-105.12,105.034c0,35.826,17.009,74.29,50.556,114.322
                                                                                                                            c24.639,29.403,48.943,48.314,49.966,49.105c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57
                                                                                                                            c1.022-0.791,25.327-19.702,49.966-49.105c33.547-40.032,50.556-78.495,50.556-114.322
                                                                                                                            C361.601,74.583,314.444,27.465,256.481,27.465z M295.411,132.498c0,21.482-17.43,38.898-38.93,38.898
                                                                                                                            c-21.5,0-38.93-17.415-38.93-38.898s17.43-38.898,38.93-38.898C277.981,93.6,295.411,111.016,295.411,132.498z" />
                                                            <path style="fill:#E7343F;"
                                                                d="M256.481,27.465c-4.594,0-9.119,0.298-13.559,0.872c51.583,6.667,91.562,50.836,91.562,104.162
                                                                                                                            c0,35.826-17.009,74.29-50.556,114.322c-15.845,18.908-31.54,33.467-41.005,41.669c5.254,4.552,8.596,7.154,8.96,7.436
                                                                                                                            c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57c1.022-0.791,25.327-19.702,49.966-49.105
                                                                                                                            c33.547-40.032,50.556-78.495,50.556-114.322C361.601,74.583,314.444,27.465,256.481,27.465z" />
                                                            <path style="fill:#FFDB56;"
                                                                d="M259.078,483.874l45.285-20.316L256,413.507v71.026c0,0,0,0,0.001,0
                                                                                                                            C257.046,484.533,258.095,484.316,259.078,483.874z" />
                                                            <path style="fill:#1EA4E9;"
                                                                d="M471.654,254.074c-0.401-2.212-1.773-4.128-3.739-5.221l-7.97-4.433l-91.827,20.477l0,0
                                                                                                                                l133.656,155.121L471.654,254.074z" />
                                                            <path style="fill:#1EA4E9;"
                                                                d="M255.999,484.533C256,484.533,256,484.533,255.999,484.533v-7.508L140.977,302.346l-9.837,126.895
                                                                                                                                l121.781,54.634C253.904,484.316,254.953,484.533,255.999,484.533z" />
                                                        </svg>
                                                    </h6>
                                                </div>
                                                <div class="row">
                                                    <h6 class="font-weight-normal text-uppercase ml-5 mt-1">R$ 700,00
                                                    </h6>
                                                    <h6 class="font-weight-normal text-uppercase ml-auto mr-5">Dinheiro
                                                        <svg class="mb-1" width="30" height="30" viewBox="0 0 32 32">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path
                                                                    d="M30 27H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v18a2 2 0 0 1-2 2z"
                                                                    fill="#CFEDB5"></path>
                                                                <path
                                                                    d="M25 8H7a4 4 0 0 1-4 4v8a4 4 0 0 1 4 4h18a4 4 0 0 1 4-4v-8a4 4 0 0 1-4-4m-.9 1a5.018 5.018 0 0 0 3.9 3.9v6.2a5.018 5.018 0 0 0-3.9 3.9H7.9A5.018 5.018 0 0 0 4 19.1v-6.2A5.018 5.018 0 0 0 7.9 9h16.2"
                                                                    fill="#458A46"></path>
                                                                <path
                                                                    d="M16 11a4 4 0 1 0 0 8 4 4 0 0 0 0-8m0 1c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3M11 22h10v-1H11zM4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0M28 8a1 1 0 1 0 2 0 1 1 0 0 0-2 0M28.07 24a1 1 0 1 1 2 0 1 1 0 0 1-2 0M4.07 24a1 1 0 1 0-2 0 1 1 0 0 0 2 0"
                                                                    fill="#458A46"></path>
                                                            </g>
                                                        </svg>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div id="corpo_item_1" class="panel-collapse collapse in" role="tabpanel"
                                                aria-labelledby="item_1">
                                                <div class="corpo-item-servico">
                                                    corpo 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-5 col-sm-4">

                <div class="card card-estatistica">
                    <div class="card-body text-center">
                        <span class="badge badge-pill badge-info">8/10</span>
                        <h4>Nota</h4>
                    </div>
                </div>

                <div class="card card-estatistica">
                    <div class="card-body text-center">
                        <span class="badge badge-pill badge-info">82%</span>
                        <h4>De Aprovação dos clientes</h4>
                    </div>
                </div>

                <div class="card card-estatistica">
                    <div class="card-body text-center">
                        <span class="badge badge-pill badge-info">110</span>
                        <h4>Serviços Concluídos</h4>
                    </div>
                </div>

                <div class="card card-estatistica">
                    <div class="card-body text-center">
                        <span class="badge badge-pill badge-info">70%</span>
                        <h4>Recomendaria você</h4>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <!-- Modal Bodies come here -->

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

<script src="../assets/js/estilo/itemSelecionado.js"></script>

</html>