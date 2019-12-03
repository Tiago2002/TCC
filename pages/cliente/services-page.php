

<?php
   include_once("../../assets/php/scripts/logincheck-cliente.php");
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
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../../assets/css/paper-kit.css" rel="stylesheet" />
      <link href="../../assets/css/estilo.css" rel="stylesheet" />
   </head>
   <body>
      <!--    navbar come here          -->
      <nav class="navbar navbar-expand-lg bg-primary">
         <div class="container">
            <div class="navbar-translate">
               <a class="navbar-brand" href="dashboard.php">delas</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-bar bar1"></span>
               <span class="navbar-toggler-bar bar2"></span>
               <span class="navbar-toggler-bar bar3"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-primary">
               <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                     <a class="nav-link" href="homepage.php">
                        <i class="fas fa-tasks"></i>
                        <p>Solicitar um serviço</p>
                     </a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="#">
                        <i class="fas fa-question-circle"></i>
                        <p>Ajuda</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services-page.php">
                     <i class="fas fa-receipt"></i>
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
      <div class="container-fluid mt-5">
         <div class="row">
            <div class="col-md-8">
               <div class="card no-transition">
                  <div class="card-header bg-primary">
                     <h3 class="text-center text-white font-weight-bold">seus servicos</h3>
                  </div>
                  <div class="card-body">
                     <div class="dropdown">
                        <button class="mb-3 btn btn-warning btn-round" type="button"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-filter"></i>
                        Filtrar
                        </button>
                        <div class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item text-warning font-weight-bold" href="#">Filtro1</a>
                           <a class="dropdown-item text-warning font-weight-bold" href="#">Filtro2</a>
                           <a class="dropdown-item text-warning font-weight-bold" href="#">Filtro3</a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                           <div class="card-header bg-primary">
                           <button type="button" class="btn btn-warning">reclamar</button>
                           </div>
                              <div class="card-body mt-n4">
                                 <h4 class="text-primary font-weight-normal">21 Setembro 2019, 10:40</h4>
                                 <h5 class="text-warning font-weight-bold">R$ 300,00</h5>
                                 <h6 class="text-primary">Bairro: Jardim Iva</h6>
                                 <h6 class="text-primary">Status: realizado</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal Bodies come here -->
      <!--   end modal -->
   </body>
   <!-- Core JS Files -->
   <script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
   <!-- Switches -->
   <script src="../../assets/js/plugins/bootstrap-switch.js"></script>
   <!--  Plugins for Slider -->
   <script src="../../assets/js/plugins/nouislider.min.js"></script>
   <!--  Plugins for DateTimePicker -->
   <script src="../../assets/js/plugins/moment.min.js"></script>
   <script src="../../assets/js/plugins/bootstrap-datepicker.js"></script>
   <!--  Paper Kit Initialization snd functons -->
   <script src="../../assets/js/paper-kit.min.js"></script>
   <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
</html>

