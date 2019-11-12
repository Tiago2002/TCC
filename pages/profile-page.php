<?php
include_once("../assets/php/scripts/logincheck.php");

include_once("../assets/php/scripts/conexao.php");

$email = $_SESSION["email"];

$sql = "SELECT nomeCliente, telCliente, dtNascCliente, emailCliente FROM Clientes WHERE emailCliente = '$email'";

$consulta = $conexao->query($sql);

$dados = (mysqli_fetch_assoc($consulta));
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Perfil</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
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
                    <a class="nav-link" href="../assets/php/scripts/logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  <!-- End Navbar -->

  <div class="wrapper">

    <div class="container mt-5">

      <div class="row">
        <div class="col-md-4 order-xl-2">
          <div class="card no-transition">
            <img src="../assets/img/faces/avatar.jpg" alt="Image placeholder" class="card-img-top">
            <div class="card-header pt-8 pt-md-4 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="services-page.php" class="btn btn-outline-default btn-round p-2">
                  <i class="fas fa-cash-register"></i> Serviços
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="text-center">
                <h6><?php echo $dados['nomeCliente']; ?></h6>
                <i class="ni location_pin mr-2"></i>
                <h6>23 Anos</h6>
              </div>
            </div>
          </div>

          <!--<div class="card">
            <div class="card-body">
              This is some text within a card body.
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              This is some text within a card body.
            </div>
          </div>-->

        </div>

        <div class="col-xl-8">
          <div class="card no-transition">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h6>Perfil</h6>
                </div>
                <div class="col-4 text-right">
                  <a href="#" class="btn btn-outline-default btn-round">Salvar</a>
                </div>
              </div>
            </div>

            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Informações Pessoais</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="txtNome" class="form-control" placeholder="Nome completo"
                          value="<?php echo $dados['nomeCliente']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="email">Endereço de e-mail</label>
                        <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Endereço de e-mail"
                          value="<?php echo $dados['emailCliente']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="nome">Telefone</label>
                        <input type="text" id="nome" class="form-control" name="txtTelefone" placeholder="Telefone" value="<?php echo $dados['telCliente']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="label-control" for="input-address">Nascimento</label>
                        <input type="text" class="form-control datetimepicker" name="txtNascimento" value="<?php echo $dados['telCliente']; ?>" placeholder="99/99/9999" />
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Endereço e Formação</h6>
                <div class="alerta-erro alert alert-danger fade show" role="alert">
                  <strong><span id="msg-alerta-erro" class="h6"></span></strong>
                </div>
                <div class="alerta-sucesso alert alert-success" role="alert">
                  <strong>Endereço Trocado com sucesso</strong>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group form-cep">
                      <label class="form-control-label" for="cep">CEP</label>
                      <input type="text" id="cep" class="form-control" placeholder="CEP">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="form-control-label" for="logradouro">Complemento</label>
                      <input id="complemento" class="form-control" placeholder="Complemento" value="" type="text">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="form-control-label" for="numeroEndereco">N°</label>
                      <input id="numeroEndereco" class="form-control" placeholder="Número" value="10" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="logradouro">Logradouro</label>
                      <input id="logradouro" class="form-control" placeholder="logradouro" value="" type="text"
                        readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="bairro">Bairro</label>
                      <input id="bairro" class="form-control" placeholder="bairro" value="" type="text" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="form-control-label" for="cidade">Cidade</label>
                      <input type="text" id="cidade" class="form-control" placeholder="Cidade" value="" readonly>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="form-control-label" for="pais">País</label>
                      <input type="text" id="pais" class="form-control" placeholder="País" value="Brasil" readonly>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="form-control-label" for="Estado">Estado</label>
                      <input type="text" id="estado" class="form-control" placeholder="Estado" value="" readonly>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Sobre mim!</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <textarea rows="4" class="form-control" placeholder="Escreva algo sobre você"></textarea>
                  </div>
                </div>
              </form>
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
  <!--scripts pessoais-->
  <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
  <script src="../assets/js/estilo/validacoes.js"></script>

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

</body>

</html>