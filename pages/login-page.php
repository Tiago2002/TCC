<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {
  header("Location: dashboard.php");
  exit();
}
?>
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
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.min.css?v=2.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
</head>

<body>

  <div class="page-header section-dark">
    <div class="container">
      <div class="col-md-6 mx-auto mt-3">
        <div class="card">
          <h3 class="text-center text-uppercase font-weight-normal">Entrar</h3>
          <div class="card-body">

            <div class="col-md-7 ml-auto mr-auto">

              <div class="text-center mt-3">
                <h4 class="mb-3"> Não tem conta ? </h4>
                <a href="register-page.php" class="btn btn-outline-default btn-round">
                  Criar conta <i class="fas fa-door-open m-2"></i>
                </a>
              </div>

              <hr>

              <form method="POST" action="../assets/php/login-cliente.php">

                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="email" placeholder="Endereço de email">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <input type="password" placeholder="Senha" name="password" class="form-control">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="logIn" class="btn btn-outline-primary btn-round">Entrar</button>
                </div>
              </form>

            </div>

            <div class="card card-just-text mt-3" data-background="color" data-color="orange" data-radius="none">
              <div class="card-body">
                <h6 class="card-category">Lembre-se, não divulgue sua senha com ninguém</h6>
                <p class="card-description">Para continuarmos, entre na sua conta</p>
              </div>
            </div>
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
</body>

</html>