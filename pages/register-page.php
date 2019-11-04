<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
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
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../assets/css/paper-kit.min.css?v=2.3.0" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <!-- CSS Files -->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
   </head>

 <body class="bg-light ">

   <div class="container">
      <div class="row">
         <?php
            $tipo = $_GET['tipo'];
            
            if ($tipo == 0) {
              echo "
              <div class='col-xl-5 ml-auto'>
              <div class='text-center mt-3'>
              <h3 class='mb-3 mt-5 font-weight-normal'>
                Cadastrar-se para Trabalho
              </h3>";
            } else {
              echo "<div class='col-xl-5   mx-auto'>
              <div class='text-center mt-3'>
              <h3 class='mb-3 mt-5 font-weight-normal'>
              Cadastrar como cliente
            </h3>";
            }
            
            ?>
         <h6 class="text-center text-uppercase font-weight-normal">serviços seguros para você</h6>
         <button class="btn btn-outline-info btn-round" data-toggle="modal" data-target=".modal-login">
         Entrar agora
         <i class="fas fa-door-open m-2"></i>
         </button>
      </div>
      <hr>
      <form class="mt-4" id="form-registro" method="POST" <?php
            if ($tipo == 0) {
               echo "action='../assets/php/cadastrar-prestadora.php'>";
            } else {
               echo "action='../assets/php/cadastrar-cliente.php'>";
            }
            ?>
         <div class="form-group mt-4">
            <h6>Nome (Obrigatório)</h6>
            <div class="input-group">
               <input type="text" class="form-control" id="nome" name="txtName" placeholder="Nome completo" required>
            </div>
         </div>
         <div class="form-group mt-4">
            <h6>Número de telefone (Obrigatório)</h6>
            <div class="input-group">
               <div class="input-group-prepend">
                  <label class="input-group-text">+55</label>
               </div>
               <input type="tel" class="form-control" maxlength="13" name="txtTel" id="numeroRegistro"
                  OnKeyPress="formatar('## #####-####', this)" placeholder="Telefone" required>
            </div>
         </div>
         <div class="alert alert-danger alerta-tel" role="alert">
            <h6 class="mt-2" id="msg-alerta-tel">Insira um número válido</h6>
         </div>
         <div class="form-group mt-4">
            <h6>Endereço de email (Obrigatório)</h6>
            <div class="input-group">
               <input type="text" class="form-control" id="emailRegistro" name="txtEmail" placeholder="Endereço de email"
                  required>
            </div>
         </div>
         <div class="alert alert-danger alerta-email" role="alert">
            <h6 class="mt-2" id="msg-alerta-email">Insira um email válido</h6>
         </div>
         <div class="form-row">
            <div class="form-group mt-4 col-md-6">
               <h6>Senha (Obrigatório)</h6>
               <input type="password" maxlength="16" id="senha1" placeholder="Senha" class="form-control"
                  name="txtPassword" required>
            </div>
            <div class="form-group mt-4 col-md-6">
               <h6>Confirme a senha</h6>
               <input type="password" maxlength="16" id="senha2" placeholder="Confirme a Senha" class="form-control"
                  required>
            </div>
         </div>
         <div class="alert alert-danger alerta-senha" role="alert">
            <h6 class="mt-2" id="msg-alerta-senha">Senhas Diferentes</h6>
         </div>
         <div class="text-center">
            <button type="button" class="btn btn-success btn-lg btn-block btn-round mt-3 mb-3"
               onclick="validarCamposCadastro()">Cadastre-se</button>
            <small>
            Ao clicar em “Cadastre-se”, você aceita os <a href="#" class="badge badge-pill badge-info"
               data-toggle="modal" data-target="#modalTermos">termos de
            uso</a> da Delas e confirma que leu a Política
            de Privacidade.
            </small>
         </div>
      </form>
   </div>
   <?php
      $tipo = $_GET['tipo'];
      
      if ($tipo == 0) {
        echo "<div class='col-xl-7 mr-auto ml-auto'>
        <div class='row mt-5'>
            <div class='col-md-8 ml-auto mr-auto text-center'>
                <h2 class='title text-uppercase mt-5'>Trabalhe Conosco</h2>
                <h5 class='description text-dark h6'>Não perca tempo e realize logo o seu cadastro e trabalhe com a Delas.</h5>
                <br>
            </div>
        </div>
        <div class='row mt-5'>
            <div class='col'>
                <div class='info'>
                    <div class='icon icon-success text-center'>
                    <i class='fas fa-money-bill-wave'></i>
                    </div>
                    <div class='description'>
                        <h6 class='info-title'>Faça um bom dinheiro</h6>
                        <p class='h6'> Você decide quando quer ganhar dinheiro trabalhando. Quanto mais você trabalhar,
                            mais poderá ganhar.</p>
                    </div>
                </div>
            </div>
            <div class='col'>
                <div class='info'>
                    <div class='icon icon-info text-center'>
                    <i class='fas fa-map-signs'></i>
                    </div>
                    <div class='description'>
                        <h6 class='info-title'>Liberdade</h6>
                        <p class='h6'>escolha o tipo de serviço que você quiser, basta você ter conhecimento para realizá-lo</p>
                    </div>
                </div>
            </div>
            <div class='col'>
                <div class='info'>
                    <div class='icon icon-warning text-center'>
                    <i class='fas fa-shield-alt'></i>
                    </div>
                    <div class='description'>
                        <h6 class='info-title'>Segurança</h6>
                        <p class='h6'>Pessoas de confianças para você, segurança e conforto na hora do trabalho.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>";
      }
      
      ?>
   </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Termos de uso</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum dolor eget mauris
               tristique
               tempor. Praesent feugiat purus eros, at pharetra augue finibus quis. Curabitur nec elementum elit, et
               luctus
               ligula. Nulla pellentesque ultrices risus, sed volutpat diam auctor eget. Suspendisse sit amet justo
               purus.
               Donec id consequat erat, et mattis erat. Suspendisse gravida nec arcu sed feugiat. Nulla eget ex
               posuere,
               dictum mi fringilla, volutpat elit. Quisque pretium lacus purus, euismod aliquet quam venenatis at. Nam
               id
               massa elementum, commodo ex non, auctor dolor.
               Sed diam ante, molestie eget convallis et, tempus sollicitudin risus. Cras gravida mattis libero, vel
               consectetur enim pulvinar sed. Integer eros nisi, iaculis eget tristique sed, porta vitae urna. Nullam
               sapien
               nibh, mattis nec pharetra in, elementum non ipsum. Ut lorem quam, elementum a facilisis ut, rhoncus ut
               leo.
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default btn-link" data-dismiss="modal">OK</button>
            </div>
         </div>
      </div>
   </div>
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
                  <a href="login-page.php?tipo=0" class="btn btn-primary btn-link">Como Prestadora</a>
               </div>
               <div class="divider"></div>
               <div class="right-side">
                  <a href="login-page.php?tipo=1" class="btn btn-danger btn-link">Como cliente</a>
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
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
   <!-- scripts pessoais -->
   <script src="../assets/js/estilo/validacoes.js"></script>
   </body>
</html>