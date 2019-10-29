<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Delas - Entrar
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

<body class="bg-light">

    <div class="container">
        <div class="col-md-5 mx-auto">

            <h3 class='mb-5 mt-5 text-uppercase'>
                Entre
            </h3>

            <form method="POST" action="../assets/php/login-cliente.php">
                <div class="form-group">
                    <h6>Endereço de email</h6>
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" placeholder="Endereço de email">
                    </div>
                </div>

                <div class="form-group">
                    <h6>Senha</h6>
                    <div class="input-group">
                        <input type="password" placeholder="Senha" name="password" class="form-control">
                    </div>
                </div>

                <small>
                    <a href="#" class="badge badge-pill badge-info" >Esqueci minha senha</a>
                </small>

                <div class="text-center">
                    <button type="submit" name="logIn"
                        class="btn btn-success btn-lg btn-block btn-round mt-3 mb-3">Entrar</button>
                </div>
            </form>
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