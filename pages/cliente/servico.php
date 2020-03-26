<?php
   $idServico = $_GET["id"];
   
   if(isset($idServico)){
      include_once("../../assets/php/scripts/conexao.php");
   
      $sqlEspecialidade = "SELECT nomeEspecialidade, custoEspecialidade, idArea FROM Especialidades WHERE idEspecialidade = $idServico";
   
      $consultaEspec = $conexao->query($sqlEspecialidade);
   
      $dados = mysqli_fetch_assoc($consultaEspec);
   }
   
   $idArea = $dados['idArea'];
   
   $custoPadrao = $dados['custoEspecialidade'];
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
      <nav class="navbar navbar-expand-lg bg-primary nav-down">
         <div class="container">
            <div class="navbar-translate">
               <a class="navbar-brand" href="homepage.php">delas</a>
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
      <div class="container">

      <form action="../../assets/php/cliente/salvarServico.php" method="post" enctype="multipart/form-data">
      <div class="row">
            <div class="col-md-5 mt-5">
               <h6 class="text-primary text-center mb-3">Selecione uma foto do local</h6>
               <img id="previaLocal" src="../../assets/img/localTrabalho.jpg" alt="Rounded Image" class="img-rounded img-responsive">
               <div class="text-center mb-5">
                  <div class="custom-file">
                     <input type="file" name="imgServico" class="custom-file-input" id="imagemLocal" required>
                     <label class="btn btn-warning text-primary btn-round" for="imagemLocal">Escolha uma imagem</label>
                  </div>
               </div>
            </div>

            <div class="col-md-6 mt-3">
               <input name="especialidade" class="text-center p-2 font-weight-bold text-primary" value="<?php echo utf8_encode($dados['nomeEspecialidade']); ?>" readonly/>
               <hr>
               <small class="text-danger text-uppercase font-weight-bold">* atente-se a todas as informações *</small>
               <div class="form-row">
                  <div class="form-group col-md-6 col-sm-6 mt-3">
                     <h6 class="text-warning">Data do Serviço</h6>
                     <input type="text" class="form-control datetimepicker" name="dataServico" placeholder="DD/MM/AAAA" />
                     <input type="hidden" name="idArea" value="<?php echo $idArea;?>" />
                     <input type="hidden" name="idEspecialidade" value="<?php echo $idServico;?>" />
                  </div>
                  <div class="form-group col-md-6 col-sm-6 mt-3">
                     <h6 class="text-warning">Horário do serviço</h6>
                     <select name="horarioServico" class="form-control borda">
                        <option>8:00</option>
                        <option>8:30</option>
                        <option>9:00</option>
                        <option>9:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>12:00</option>
                        <option>12:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <h6 class="text-warning">escreva uma breve descrição do que há de ser feito</h6>
                  <textarea class="form-control borda" name="descricaoServico" style="resize: none" id="exampleFormControlTextarea1" rows="5" required></textarea>
               </div>
               <div class="form-group">
                  <h6 class="text-warning">Módulo</h6>
                  <div class="input-group mb-2 mr-sm-2">
                     <?php if($idArea == 3): ?>
                     <input type="number" name="moduloServico" min="1" max="200" value="1" class="form-control" id="moduloServico" placeholder="Digite em números a área do local" required>
                     <div class="input-group-prepend">
                        <div class="input-group-text borda">m²</div>
                     </div>
                     <?php else: ?>
                     <div class="input-group-prepend">
                        <div class="input-group-text borda">Quantidade</div>
                     </div>
                     <input type="number" name="moduloServico" min="1" max="20" value="1" class="form-control" id="moduloServico" placeholder="Digite a quantidade" required>
                     <?php endif; ?>
                  </div>
                  <hr>
               </div>

               <div class="row">

                  <div class="col-md-6 col-sm-6 mt-2 mb-5">
                     <h6 class="text-warning">valor padrão</h6>
                     <div class="row">
                        <div class="input-group-prepend">
                           <span class="input-group-text borda">R$</span>
                        </div>
                        <input type="text" name="precoServico" class="form-control text-primary borda col-md-10" id="valorPadrao" value="<?php echo $custoPadrao;?>" readonly>
                     </div>
                  </div>

                  <div class="col-md-6 col-sm-6 mt-2 mb-5">
                     <h6 class="text-warning">valor total</h6>
                     <div class="row">
                        <div class="input-group-prepend">
                           <span class="input-group-text borda">R$</span>
                        </div>
                        <input type="text" name="valorTotal" class="form-control text-primary font-weight-normal borda p-2 col-md-10" id="precoTotal" readonly>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 offset-md-0 mt-4 mx-auto">
                           <button type="submit" class="btn btn-primary btn-block">Solicitar serviço<i class="fa fa-chevron-right"></i></button>
                        </div>
                     </div>
                  </div>

               </div>
               
            </div>
         </div>
      
      </form>
      </div>
      <!-- Modal Bodies come here -->
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
   <script src="../../assets/js/paper-kit.js" type="text/javascript"></script>
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
   <!-- scripts pessoais -->
   <script>
      $('.datetimepicker').datetimepicker({
          icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
          },
          format: 'L'
      });
   </script>
   <script>
      $("#imagemLocal").change(function(){
      if($(this).val()){ // só se o input não estiver vazio
          var img = this.files[0]; // seleciona o arquivo do input
          var f = new FileReader(); // cria o objeto FileReader
          f.onload = function(e){ // ao carregar a imagem
              $("#previaLocal").attr("src",e.target.result); // altera o src da imagem
          }
          f.readAsDataURL(img); // lê o arquivo
      }
      });
   </script>
   <script>
      var valor = parseFloat($("#valorPadrao").val());
      $( document ).ready(function() {
         var modulo = $("#moduloServico").val();
         $("#precoTotal").val(valor * modulo + (".00"));
      });
      $("#moduloServico").change(function alterarValor(){
         var modulo = $("#moduloServico").val();
         $("#precoTotal").val(valor * modulo + (".00"));
      });
      
   </script>

</html>

