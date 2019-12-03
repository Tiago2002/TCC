

<?php
   include_once("../../assets/php/scripts/logincheck-cliente.php");
   
   include_once("../../assets/php/scripts/conexao.php");
   
   $email = $_SESSION["email"];
   
   $queryPrincipal = "SELECT t1.idCliente as id, nomeCliente, telCliente, dtNascCliente, caminhoFoto, date_format(dtNascCliente,'%d/%m/%Y') as dtNasc, 
   emailCliente, cpfCliente, t2.*, t2.idEnd_Cliente as idEnd_Cliente
   FROM Clientes t1 
   LEFT JOIN End_Clientes t2 on (t1.idCliente = t2.idCliente)
   WHERE emailCliente = '$email'";
   
   $consulta = $conexao->query($queryPrincipal);
   
   $dados = (mysqli_fetch_assoc($consulta));
   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Perfil</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <!-- CSS Files -->
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../../assets/css/paper-kit.css" rel="stylesheet" />
      <link rel="stylesheet" href="../../assets/css/estilo.css">
   </head>
   <body class="sidebar-collapse">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary nav-down">
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
      <!-- End Navbar -->
      <div class="wrapper">
      <div class="container mt-5">
      <div class="row">
      <!--  div imagem de perfil  -->
      <div class="col-md-4 order-xl-2">
         <div class="card no-transition">
            <?php
               if (isset($dados['caminhoFoto'])) {
                   $caminhoFoto = $dados['caminhoFoto'];
                   echo "<img src=' ../../assets" . $caminhoFoto . "' alt='" . $dados['nomeCliente'] . "' class='img-thumbnail img-responsive'>";
               } else {
                   echo "<img src='../../assets/img/faces/default.png' alt='Sem foto' class='img-thumbnail img-responsive'>";
               }
               ?>
            <div class="card-header">
               <div class="row">
                  <a href="services-page.php" class="btn btn-primary btn-round p-2 mx-auto">
                  Meus Serviços <i class="fas fa-receipt ml-2"></i>
                  </a>
                  <a href="" data-toggle="modal" data-target="#modalImg" class="btn btn-primary btn-round p-2 mx-auto">
                  Trocar imagem<i class="fas fa-image ml-2"></i>
                  </a>
               </div>
            </div>
            <div class="card-body">
               <div class="text-center">
                  <h6 class="text-primary m-3"><?php
                     echo $dados['nomeCliente'];
                     ?></h6>
                  <h6 class="text-warning"><?php
                     if (isset($dados['dtNascCliente'])) {
                         $dataNascimento = $dados['dtNascCliente'];
                         $date           = new DateTime($dataNascimento);
                         $interval       = $date->diff(new DateTime(date('d-m-Y')));
                         echo $interval->format('%Y anos');
                     }
                     ?></h6>
               </div>
            </div>
         </div>
      </div>
      <!--  fim da div imagem de perfil  -->
      <!--  div Informações pessoais  -->
      <div class="col-xl-8">
      <div class="card no-transition">
         <div class="card-header bg-primary">
            <div class="row align-items-center">
               <div class="col-8">
                  <h6 class="text-white">Perfil</h6>
               </div>
               <div class="col-4 text-right">
                  <!--  Botão editar abre um modal para edição das informações pessoais  -->
                  <a href="#" class="btn btn-warning btn-round" data-toggle="modal" data-target="#modalInfo">
                  Editar <i class="fas fa-user-edit ml-2"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="card-body">
            <h6 class="heading-small text-primary mb-4">Informações Pessoais</h6>
            <div class="pl-lg-4">
               <div class="row">
                  <div class="col-lg-7">
                     <label class="text-warning font-weight-bold" for="nome">Nome Completo</label>
                     <h6><?php
                        echo $dados['nomeCliente'];
                        ?></h6>
                  </div>
                  <div class="col-lg-4">
                     <label class="text-warning font-weight-bold" for="cpf">CPF</label>
                     <h6><?php
                        echo $dados['cpfCliente'];
                        ?></h6>
                     <br />
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-5">
                     <label class="text-warning font-weight-bold" for="email">e-mail</label>
                     <h6><?php
                        echo $dados['emailCliente'];
                        ?></h6>
                     <br />
                  </div>
                  <div class="col-lg-4">
                     <label class="text-warning font-weight-bold" for="telefone">Telefone</label>
                     <h6>+55<?php
                        echo $dados['telCliente'];
                        ?></h6>
                     <br />
                  </div>
                  <div class="col-lg-2">
                     <label class="text-warning font-weight-bold" for="dataNasc">Nascimento</label>
                     <h6><?php
                        echo $dados['dtNasc'];
                        ?></h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  fim da div Informações pessoais  -->
      <!--  div Endereço  -->
      <div class="card no-transition">
      <div class="card-header bg-primary">
         <div class="row align-items-center">
            <div class="col-8">
               <h6 class="text-white">Endereço</h6>
            </div>
            <div class="col-4 text-right">
               <!--  Botão editar abre um modal para edição do endereço  -->
               <a href="#" class="btn btn-warning btn-round" data-toggle="modal" data-target="#modalEndereco">
               Editar <i class="fas fa-map-marked ml-2"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="card-body">
         <div class="row">
            <div class="col-md-5">
               <div class="form-group form-1">
                  <label class="text-warning font-weight-bold" for="cep">CEP</label>
                  <h6><?php
                     echo $dados['CEP'];
                     ?></h6>
               </div>
            </div>
            <div class="col-md-5">
               <label class="text-warning font-weight-bold" for="complemento">Complemento</label>
               <h6><?php
                  echo $dados['complemento'];
                  ?></h6>
            </div>
            <div class="col-md-2">
               <label class="text-warning font-weight-bold" for="email"> Nº </label>
               <h6><?php
                  echo $dados['numero'];
                  ?></h6>
               <br />
            </div>
         </div>
         <div class="row">
            <div class="col-md-11">
               <div class="form-group form-2">
                  <label class="text-warning font-weight-bold" for="bairro">Logradouro</label>
                  <h6><?php
                     echo $dados['logradouro'];
                     ?></h6>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-5">
               <label class="text-warning font-weight-bold" for="bairro">Bairro</label>
               <h6><?php
                  echo $dados['bairro'];
                  ?></h6>
            </div>
            <div class="col-md-5">
               <label class="text-warning font-weight-bold" for="localidade"> Localidade </label>
               <h6><?php
                  echo utf8_encode($dados['localidade']);
                  ?></h6>
            </div>
            <div class="col-md-2">
               <label class="text-warning font-weight-bold" for="uf"> UF </label>
               <h6><?php
                  echo $dados['uf'];
                  ?></h6>
            </div>
         </div>
      </div>
      <!--  fim da div Endereço  -->
      <!--  Modal Imagem de Perfil  -->
      <div class="modal fade" id="modalImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="heading-small text-primary" id="exampleModalLabel">Alterar Imagem de
                     Perfil
                  </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="../../assets/php/cliente/atualiza-perfil-cliente.php" method="POST" enctype="multipart/form-data">
                  <div id="imagem">
                        <img class="img-thumbnail img-responsive" id="previaPerfil" src="" />
                    </div>
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imgPerfil" id="imgPerfil">
                        <label class="btn btn-primary btn-round" for="imgPerfil">Escolher arquivo...</label>
                    </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-warning btn-round m-3" data-dismiss="modal">Fechar</button>
               <button type="submit" name="btnImgPerfil" class="btn btn-primary btn-round m-3">Salvar mudanças</button>
               </form>
               </div>
            </div>
         </div>
      </div>
      <!--  Fim do Modal Imagem de Perfil  -->
      <!--  Modal Informaçoes pessoais  -->
      <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="heading-small text-primary" id="exampleModalLabel">Editar Informações
                     Pessoais
                  </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="../../assets/php/cliente/atualiza-perfil-cliente.php" method="POST">
                     <div class="pl-lg-4">
                        <div class="row">
                           <div class="col-lg-7">
                              <div class="form-group">
                                 <label class="text-warning font-weight-bold" for="nome">Nome Completo
                                 </label>
                                 <input type="text" id="nome" name="txtNome" class="form-control" placeholder="Nome completo" value="<?php
                                    echo $dados['nomeCliente'];
                                    ?>">
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="form-group">
                                 <label class="text-warning font-weight-bold" for="cpf">CPF</label>
                                 <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Digite apenas números" value="<?php
                                    echo $dados['cpfCliente'];
                                    ?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-5">
                              <div class="form-group">
                                 <label class="text-warning font-weight-bold" for="email">e-mail</label>
                                 <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Endereço de e-mail" value="<?php
                                    echo $dados['emailCliente'];
                                    ?>" readonly>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label class="text-warning font-weight-bold" for="nome">Telefone</label>
                                 <input type="text" id="nome" class="form-control" name="txtTelefone" placeholder="Telefone" value="<?php
                                    echo $dados['telCliente'];
                                    ?>">
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label class="label-control text-warning font-weight-bold" for="input-address">Nascimento</label>
                                 <input type="text" class="form-control datetimepicker" name="txtNascimento" value="<?php
                                    echo $dados['dtNasc'];
                                    ?>" placeholder="99/99/9999" />
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-primary btn-round m-3" data-dismiss="modal">Cancelar</button>
               <button type="submit" name="btnInfo" class="btn btn-primary btn-round m-3">Salvar mudanças</button>
               </form>
               </div>
            </div>
         </div>
      </div>
      <!--  Fim do Modal Informaçoes pessoais  -->
      <!--  Modal Endereço  -->
      <div class="modal fade" id="modalEndereco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="heading-small text-primary" id="exampleModalLabel">Editar Endereço</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="../../assets/php/cliente/atualiza-perfil-cliente.php" method="POST">
                     <div class="alerta-erro alert alert-warning fade show" role="alert">
                        <strong><span id="msg-alerta-erro" class="h6 text-primary"></span></strong>
                     </div>
                     <div class="alerta-sucesso alert alert-warning" role="alert">
                        <strong class="text-primary font-weight-bold">Endereço Trocado com sucesso</strong>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <div class="form-group form-cep">
                              <label class="text-warning font-weight-bold" for="cep">CEP</label>
                              <input type="text" id="cep" name="txtCep" class="form-control" value="<?php
                                 echo $dados['CEP'];
                                 ?>">
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="complemento">Complemento</label>
                              <input type="text" id="complemento" name="txtComp" class="form-control" placeholder="Complemento" value="<?php
                                 echo $dados['complemento'];
                                 ?>" type="text">
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="numeroEndereco">N°</label>
                              <input type="text" id="numeroEndereco" name="txtNum" class="form-control" placeholder="Número" value="<?php
                                 echo $dados['numero'];
                                 ?>" type="text">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="logradouro">Logradouro</label>
                              <input type="text" id="logradouro" name="txtLog" class="form-control" placeholder="logradouro" value="<?php
                                 echo $dados['logradouro'];
                                 ?>" type="text" readonly>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="bairro">Bairro</label>
                              <input type="text" id="bairro" name="txtBairro" class="form-control" placeholder="bairro" value="<?php
                                 echo $dados['bairro'];
                                 ?>" type="text" readonly>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="cidade">Localidade</label>
                              <input type="text" id="cidade" name="txtLocal" class="form-control" placeholder="Cidade" value="<?php
                                 echo utf8_encode($dados['localidade']);
                                 ?>" readonly>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="uf">Estado</label>
                              <input type="text" id="estado" name="txtUf" class="form-control" placeholder="Estado" value="<?php
                                 echo $dados['uf'];
                                 ?>" readonly>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-primary btn-round m-3" data-dismiss="modal">Fechar</button>
               <button type="submit" name="btnEndereco" class="btn btn-primary btn-round m-3">Salvar mudanças</button>
               </form>
               </div>
            </div>
         </div>
      </div>
      <!--  Fim do Modal Endereço  -->
      <!--  Modal Dados Bancários  -->
      <div class="modal fade" id="modalDadosBancarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="heading-small text-muted" id="exampleModalLabel">Editar Dados
                  Bancários
               </h6>
               <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="../../assets/php/cliente/atualiza-perfil-cliente.php" method="POST">
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="selectBanco">Banco</label>
                           <select class="form-control" name="selectBanco" id="selectBanco">
                              <option value=""> -- Selecione o Banco -- </option>
                              <?php
                                 include("../../assets/php/scripts/conexao.php");
                                 
                                 if ($conexao->connect_errno) {
                                     printf("Connect failed: %s\n", $conexao->connect_error);
                                     exit();
                                 }
                                 $id = $dados["id"];
                                 
                                 $queryDadosBanc = "SELECT idBanco, banco from Bancos";
                                 
                                 if ($dadosBanc = $conexao->query($queryDadosBanc)) {
                                 
                                     while ($info3 = $dadosBanc->fetch_assoc()) {
                                 
                                         if ($info3['idBanco'] == $dados['bancoCliente']) {
                                             echo "<option selected='selected' value=" . $info3['idBanco'] . ">" . $info3['banco'] . "</option>";
                                         } else {
                                             echo "<option value=" . $info3['idBanco'] . ">" . $info3['banco'] . "</option>";
                                         }
                                     }
                                     $dadosBanc->free();
                                 }
                                 $conexao->close();
                                 ?>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="logradouro">Agência</label>
                              <input type="text" id="agenciaBanco" name="txtAgBanco" class="form-control" placeholder="1234" value="<?php
                                 echo $dados['agenciaBanco'];
                                 ?>" type="text">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="text-warning font-weight-bold" for="bairro">Conta</label>
                              <input type="text" id="contaBanco" name="txtContaBanco" class="form-control" placeholder="123456-7" value="<?php
                                 echo $dados['contaBanco'];
                                 ?>" type="text">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary btn-round m-3" data-dismiss="modal">Fechar</button>
                     <button type="submit" name="btnDadosBancarios" class="btn btn-primary btn-round m-3">Salvar mudanças
                     </button>
            </form>
            </div>
            </div>
         </div>
      </div>
      <!--  Fim do Modal Dados Bancários  -->
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
      <!--scripts pessoais-->
      <script src="https://kit.fontawesome.com/d70538755c.js" crossorigin="anonymous"></script>
      <script src="../../assets/js/estilo/validacoes.js"></script>
      <script src="../../assets/js/estilo/cep.js"></script>
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
               
        $("#imgPerfil").change(function(){
        if($(this).val()){ // só se o input não estiver vazio
            var img = this.files[0]; // seleciona o arquivo do input
            var f = new FileReader(); // cria o objeto FileReader
            f.onload = function(e){ // ao carregar a imagem
                $("#previaPerfil").attr("src",e.target.result); // altera o src da imagem
            }
            f.readAsDataURL(img); // lê o arquivo
        }
        });

        </script>
   </body>
</html>

