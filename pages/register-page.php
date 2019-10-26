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
      <div class="col-md-10 mx-auto mt-3">
        <div class="card">
          <h3 class="text-center text-uppercase font-weight-normal">Cadastro</h3>
          <div class="card-body">

            <div class="row">

              <div class="col-md-5 ml-auto">

                <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                  <div class="card-body">
                    <h6 class="card-category">Feito para mulheres</h6>
                    <p class="card-description">Delas é exclusivo para o uso apenas mulheres.</p>
                  </div>
                </div>

                <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                  <div class="card-body">
                    <h6 class="card-category">Facilidade nos negócios</h6>
                    <p class="card-description">Facilitamos o seus negócios de um jeito prático e seguro.</p>
                  </div>
                </div>

                <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                  <div class="card-body">
                    <h6 class="card-category">Variedades</h6>
                    <p class="card-description">diversas áreas para não faltar profissionais dispostos a ajudar você</p>
                  </div>
                </div>

              </div>
              <div class="col-md-5 ml-auto mr-auto">

                <div class="text-center mt-3">
                  <h4 class="mb-3"> Já é cadastrado? </h4>
                  <a href="login-page.php" class="btn btn-outline-default btn-round">
                    Entrar agora <i class="fas fa-door-open m-2"></i>
                  </a>
                </div>

                <hr>

                <form class="mt-4" method="POST" action="../assets/php/cadastrar-cliente.php">

                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" name="txtName" placeholder="Nome completo">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <input type="tel" class="form-control" name="txtTel" placeholder="Telefone">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" name="txtEmail" placeholder="Endereço de email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" placeholder="Senha" class="form-control" name="txtPassword">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" placeholder="Confirme a Senha" class="form-control" name="txtConfPass">
                    </div>
                  </div>

                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked="">
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                      Eu aceito os
                      <a href="#" class="text-primary" data-toggle="modal" data-target="#modalTermos">termos e
                        condições</a>.
                    </label>
                  </div>

                  <div class="text-center">
                    <button type="submit" name="register" class="btn btn-outline-primary btn-round">Cadastrar</button>
                  </div>
                </form>

              </div>


            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum dolor eget mauris tristique
          tempor. Praesent feugiat purus eros, at pharetra augue finibus quis. Curabitur nec elementum elit, et luctus
          ligula. Nulla pellentesque ultrices risus, sed volutpat diam auctor eget. Suspendisse sit amet justo purus.
          Donec id consequat erat, et mattis erat. Suspendisse gravida nec arcu sed feugiat. Nulla eget ex posuere,
          dictum mi fringilla, volutpat elit. Quisque pretium lacus purus, euismod aliquet quam venenatis at. Nam id
          massa elementum, commodo ex non, auctor dolor.

          Sed diam ante, molestie eget convallis et, tempus sollicitudin risus. Cras gravida mattis libero, vel
          consectetur enim pulvinar sed. Integer eros nisi, iaculis eget tristique sed, porta vitae urna. Nullam sapien
          nibh, mattis nec pharetra in, elementum non ipsum. Ut lorem quam, elementum a facilisis ut, rhoncus ut leo.
          Morbi non eros non velit gravida molestie. In malesuada maximus nisl a tincidunt. Aliquam vitae diam mauris.
          Nam quam enim, aliquet vitae mi vitae, tristique rhoncus ex. Mauris semper semper sapien id ultrices. Maecenas
          ac lacus in nunc interdum viverra. In aliquam quam eget velit sagittis, vitae accumsan metus porttitor. Nulla
          nulla erat, rutrum sed ante a, auctor varius quam. Suspendisse quis tortor velit. Mauris in est sed ligula
          varius tempus id id magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.

          Curabitur turpis augue, laoreet nec tortor sed, ultrices tincidunt arcu. Suspendisse magna nibh, euismod sed
          semper ac, porta accumsan quam. Duis auctor venenatis enim a lacinia. Vestibulum felis nibh, volutpat non
          egestas in, lacinia efficitur massa. Nullam quis posuere mi. Maecenas faucibus hendrerit dolor, at hendrerit
          sapien lobortis eu. Integer turpis ligula, imperdiet luctus lacinia et, hendrerit eget nibh. Mauris id
          pharetra lorem.
        </div>
        <div class="modal-footer">
          <div class="left-side">
            <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
          </div>
          <div class="divider"></div>
          <div class="right-side">
            <button type="button" class="btn btn-danger btn-link">Delete</button>
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