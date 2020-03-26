<?php
   include_once("../../assets/php/scripts/logincheck-cliente.php");

   include_once("../../assets/php/scripts/conexao.php");
   
   $email = $_SESSION["email"];

   $queryCliente = "SELECT idCliente FROM Clientes WHERE emailCliente = '$email'";
   $consultaCliente = $conexao->query($queryCliente);
   $dadosCliente = mysqli_fetch_assoc($consultaCliente);

   $idCliente = $dadosCliente['idCliente'];

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
               <a class="navbar-brand" href="homepage.php">delas</a>
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
                  <!--<li class="nav-item active">
                     <a class="nav-link" href="#">
                        <i class="fas fa-question-circle"></i>
                        <p>Ajuda</p>
                     </a>
                  </li>-->
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
            <div class="col-md-12">
               <div class="card no-transition">
                  <div class="card-header bg-primary">
                     <h3 class="text-center text-white font-weight-bold">Seus Serviços</h3>
                  </div>
                  <div class="container">
                  <div class="card-body">
                     <div class="row">

                     <?php

                     $queryServico = "SELECT t4.*, nomePrestadora, idServico, date_format(dataServico,'%d/%m/%Y') as dataServico, 
                     date_format(horaServico,'%H:%i') as horaServico, t1.idStatus, t2.idStatus, t2.descricaoStatus, custoServico, 
                     aprPrestadora, aprCliente, avaliaServico, t1.idPrestadora as prestadora, t5.nomeArea as nomeArea, t6.nomeEspecialidade as nomeEspecialidade 
                     FROM Servicos as t1 
                     INNER JOIN TbStatus as t2 ON (t1.idStatus = t2.idStatus)
                     LEFT JOIN Prestadoras as t3 ON (t1.idPrestadora = t3.idPrestadora)
                     LEFT JOIN End_Clientes as t4 ON (t1.idEnd_Cliente = t4.idEnd_Cliente)
                     LEFT JOIN Areas as t5 ON (t1.idArea = t5.idArea)
                     LEFT JOIN Especialidades as t6 ON (t1.idEspecialidade = t6.idEspecialidade)
                     WHERE t1.idCliente = '$idCliente' ORDER BY t1.dataServico DESC";

                     $consultaServico = $conexao->query($queryServico);

                     while($dadosServico = mysqli_fetch_assoc($consultaServico)){
                        echo "<div class='col-md-6'>
                        <div class='card no-transition'>
                        <div class='card-header bg-primary'>";
                        if($dadosServico['idStatus'] == 1){
                           
                           echo "<label class='badge badge-pill badge-warning h6'>Pendente</label>";
                           echo "<form method='POST' action='../../assets/php/cliente/cancelarServico.php' class='form-inline'>
                           <input name='idServico' type='hidden' value='". $dadosServico['idServico'] ."' required/>
                           <button type='submit' class='btn btn-danger mb-2'>Cancelar Serviço</button>
                        </form>";
                        }
                        else if ($dadosServico['idStatus'] == 2){
                           echo "<label class='badge badge-pill badge-warning h6 mt-2'>Aprovado</label>";
                           echo "<form method='POST' action='../../assets/php/cliente/cancelarServico.php' class='form-inline float-right'>
                           <input name='idServico' type='hidden' value='". $dadosServico['idServico'] ."' required/>
                           <button type='submit' class='btn btn-danger mb-2'>Cancelar Serviço</button>
                        </form>";
                        }
                        else if($dadosServico['idStatus'] == 3){
                           echo "<label class='badge badge-pill badge-warning h6 mt-2'>Agendado</label>";
                           echo "<form method='POST' action='../../assets/php/cliente/cancelarServico.php' class='form-inline float-right'>
                           <input name='idServico' type='hidden' value='". $dadosServico['idServico'] ."' required/>
                           <button type='submit' class='btn btn-danger mb-2'>Cancelar Serviço</button>
                        </form>";
                        }
                        else if($dadosServico['idStatus'] == 4){
                           if($dadosServico['aprCliente'] ==  0){
                           echo "<label class='badge badge-pill badge-success h6 mt-2'>Concluído</label>";
                           echo "<form method='POST' action='../../assets/php/cliente/avaliarServico.php' class='form-inline float-right'>
                           <input name='numAvaliacao' type='number' max='10' min='0' class='form-control mb-2 mr-sm-2' placeholder='Avalie o serviço' required>
                           <input name='idServico' type='hidden' value='". $dadosServico['idServico'] ."' required/>
                           <button type='submit' class='btn btn-warning mb-2'>Salvar</button>
                        </form>";
                           } else {
                              echo "<label class='badge badge-pill badge-success h6 mt-2 mb-2'>Concluído</label>";
                           }
                        }
                        else if($dadosServico['idStatus'] == 5){
                           echo "<label class='badge badge-pill badge-danger h6 mt-2 mb-2'>Cancelado</label>";
                        }
                        echo "</div>
                           <div class='card-body mt-n4'>
                              <h6 class='text-primary mt-2 text-right'>#". $dadosServico['idServico'] ."</h6>
                              <h4 class='text-primary font-weight-bold mt-2'>". utf8_encode($dadosServico['nomeArea']) ."</h4>
                              <h4 class='text-primary font-weight-normal mt-2'>". utf8_encode($dadosServico['nomeEspecialidade']) ."</h4>
                              <h4 class='text-primary font-weight-normal mt-2'>". $dadosServico['dataServico'] .", ". $dadosServico['horaServico'] ."</h4>
                              <h5 class='text-warning font-weight-bold'>R$ ". $dadosServico['custoServico'] ."</h5>";
                           if($dadosServico['prestadora'] != NULL){
                              echo "<h6 class='text-primary'>Prestadora: ". $dadosServico['nomePrestadora'] ."</h6>";
                           }
                           if($dadosServico['avaliaServico'] != NULL){
                              echo "<h5 class='text-primary font-weight-bold float-right'><i class='fas fa-star text-warning'></i> ". $dadosServico['avaliaServico'] ."</h5>";
                           }   
                           echo "</div>
                        </div>
                     </div>";
                     }

                     ?>
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

