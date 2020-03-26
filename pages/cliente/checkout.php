<!--    Checkout    -->
<?php
      session_start();

      // SDK de Mercado Pago
      require '../../vendor/autoload.php';
   
      // Configura credenciais
      MercadoPago\SDK::setAccessToken('TEST-2318480319735397-071217-715101e600b5c3f0043c10bd714cb71d-298946804');
   
      // Cria um objeto de preferência
      $preference = new MercadoPago\Preference();
      $item = new MercadoPago\Item();
      $item->title = $_SESSION["especialidade"];
      $item->quantity = $_SESSION["modulo"];
      $item->unit_price = $_SESSION["preco"];
      $preference->items = array($item);
      $preference->payment_methods = array(
         "excluded_payment_types" => array(
           array("id" => "ticket")
         ),
         "installments" => 3
       );
      $preference->back_urls = array(
         "success" => "http://localhost/TCC/assets/php/cliente/pagamento.php",
         "failure" => "http://localhost/TCC/pages/cliente/checkout.php",
         "pending" => "http://localhost/TCC/pages/cliente/checkout.php",
      );
      $preference->auto_return = "all";
      $preference->save();
         
      //481110397-adc82687-c3dd-48cd-bafc-415e0e340574  ---> boleto sem o purchase (smart)
      //481110397-f11557bb-190c-4357-b0dc-0d3aabdbbb4d ---> apenas com o "purpose": "wallet_purchase" 
      //481110397-7c4e20d8-caca-4649-a5fd-1e48121adb5c ---> com wallet purchase e com bolbradesco
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
   <style>
      .mercadopago-button{
      background-color: #2C3E50 !important;
      border-color: #2C3E50 !important;
      color: #FFFFFF !important;
      opacity: 1 !important;
      box-sizing: border-box !important;
      border-width: 2px !important;
      font-size: 12px !important;
      font-weight: 600;
      padding: 0.5rem 18px !important;
      line-height: 1.75 !important;
      cursor: pointer !important;
      text-transform: uppercase !important;
      font-weight: 800 !important;
      }
   </style>
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
      <div class="container mt-5">
      <div class="col-md-12 text-center">
            <div class="info">
              <div class="icon icon-warning">
                <i class="nc-icon nc-credit-card"></i>
              </div>
              <div class="description">
                <h4 class="font-weight-bold text-primary mb-2"> Pagamento </h4>
                <p class="h6 text-warning">O pagamento será feito através do Mercado Pago, portanto fique tranquila seu dinheiro está seguro.</p>
              </div>
            </div>
          </div>
         <div class="row">
            <div class="col-md-5 mt-5">
               <img class="img-thumbnail" src="../../assets<?php echo $_SESSION['caminhoImagem'] ?>">
            </div>
            <div class="col-md-7">
               <div class="card-body text-left mt-4">
                  <h5 class="text-primary font-weight-bold text-uppercase mb-4"><?php echo $_SESSION["especialidade"]; ?></h5>
                  <h5 class="text-primary font-weight-bold text-uppercase mb-4 ">data: <small class="borda h6 p-2 text-warning"><?php echo $_SESSION["data"]?></small></h5>
                  <h5 class="text-primary font-weight-bold text-uppercase mb-4">Horário: <small class="borda h6 p-2 text-warning"><?php echo $_SESSION["hora"]?></small></h5>
                  <h5 class="text-primary font-weight-bold text-uppercase mb-4">Módulo: <small class="borda h6 p-2 text-warning"><?php echo $_SESSION['modulo']?></small></h5>
                  <h5 class="text-primary font-weight-bold text-uppercase mb-4">descrição:</small></h5>
                  <h6 class="card-description borda p-3 text-warning">
                     <?php echo $_SESSION['descricao']?>
                  </h6>
               </div>
               <div class="text-right mt-3 mr-5">
                  <a class="btn btn-primary btn-lg" href="<?php echo $preference->init_point; ?>">pagar</a>
               </div>
            </div>
         </div>
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
         $("#precoTotal").val(valor * modulo + (",00"));
      });

      $("#moduloServico").change(function alterarValor(){
         var modulo = $("#moduloServico").val();
         $("#precoTotal").val(valor * modulo + (",00"));
      });

   </script>
</html>

