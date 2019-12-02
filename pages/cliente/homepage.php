

<?php
   include_once("../../assets/php/scripts/logincheck.php");
   
   function criarConteudoCardServico($id, $icone)
   {
       include("../../assets/php/scripts/conexao.php");
   
       $sql = "SELECT idEspecialidade, nomeEspecialidade FROM Especialidades WHERE idArea = $id";
   
       $consulta = $conexao->query($sql);
       
       //pecorrendo os registros da consulta. 
       while ($dados = mysqli_fetch_assoc($consulta)) {
           echo "<div class='col-md-3 mx-auto'>
           <div class='card-big-shadow'>
              <a href=''>
                 <div class='card card-just-text bg-primary'>
                    <div class='card-body'>
                    <div class='card-icon'>
                       <span class='icon-simple text-white'><i class='fas ". $icone ." mt-n5'></i></span>
                    </div>
                    <h6 class='text-warning'>". utf8_encode($dados['nomeEspecialidade']) ."</h6>
                    </div>
                 </div>
              </a>
           </div>
        </div>";  
       }
   }
   
   ?>
<!doctype html>
<html lang="pt-br">
   <head>
      <title>Delas, Serviços Rápidos</title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Perfil</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
         name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <!-- CSS Files -->
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
      <link href="../../assets/css/estilo.css" rel="stylesheet" />
   </head>
   <body>
      <!--    navbar come here          -->
      <nav class="navbar navbar-expand-lg navbar-absolute bg-primary nav-down">
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
      <div class="page-header page-header-small" data-parallax="true">
         <div class="content-center">
            <div class="filter"></div>
            <div class="container">
               <div class="motto">
                  <div class="card p-5">
                     <h2 class="title-uppercase font-weight-bold text-warning text-center">Encontre o que você
                        precisa
                     </h2>
                     <h6 class="text-center text-warning">Escolha a sua necessidade e encontre alguém para te ajudar.
                     </h6>
                  </div>
                  <div class="col-md-12 text-center">
                     <button type="button" class="btn btn-primary btn-lg btn-round">Vamos lá !!</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapper">
         <div class="section text-center landing-section">
            <div class="container">
            <div class="text-center shadow p-3 mb-5">
                <span class="badge badge-warning p-2">Elétrica</span>
                  <h3 class="title font-weight-bold text-primary">Serviços na área de elétrica</h3>
                <h6 class="text-primary">Escolhas alguns desses serviços</h6>
              </div>
               <div class="row">
                  <?php criarConteudoCardServico(1, "fa-bolt")?>
               </div>
               <div class="text-center shadow p-3 mb-5">
                <span class="badge badge-warning p-2">hidráulica</span>
                  <h3 class="title font-weight-bold text-primary">Serviços na área de hidráulica</h3>
                <h6 class="text-primary">Escolhas alguns desses serviços</h6>
              </div>
               <div class="row">
                  <?php criarConteudoCardServico(2, "fa-tint")?>
               </div>
               <div class="text-center shadow p-3 mb-5">
                <span class="badge badge-warning p-2">Pintura</span>
                  <h3 class="title font-weight-bold text-primary">Serviços na área de pintura</h3>
                <h6 class="text-primary">Escolhas alguns desses serviços</h6>
              </div>
               <div class="row">
                  <?php criarConteudoCardServico(3, "fa-brush")?>
               </div>
               <div class="text-center shadow p-3 mb-5">
                <span class="badge badge-warning p-2">instalação</span>
                  <h3 class="title font-weight-bold text-primary">Serviços na área de instalação</h3>
                <h6 class="text-primary">Escolhas alguns desses serviços</h6>
              </div>
               <div class="row">
                  <?php criarConteudoCardServico(4, "fa-screwdriver")?>
               </div>
               <div class="text-center shadow p-3 mb-5">
                <span class="badge badge-warning p-2">Montagem</span>
                  <h3 class="title font-weight-bold text-primary">Serviços na área de Montagem</h3>
                <h6 class="text-primary">Escolhas alguns desses serviços</h6>
              </div>
               <div class="row">
                  <?php criarConteudoCardServico(5, "fa-tools")?>
               </div>
            </div>
         </div>
         <div class="section section-dark text-center landing-section">
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

