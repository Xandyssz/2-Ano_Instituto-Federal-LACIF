
<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');  // se ele clicou no botão salvar
$exibirTipodeAcesso = $_SESSION['tipo_acesso'];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- titulo da pagina-->
    <title>Painel Administrador</title>

    <!-- ARQUIVOS JAVASCRIPT -->
    <script src='../../js/calendar/core/main.min.js'></script>
    <script src='../../js/calendar/interaction/main.min.js'></script>
    <script src='../../js/calendar/daygrid/main.min.js'></script>
    <script src='../../js/calendar/core/locales/pt-br.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/calendar/personalizado.js"></script>
    <script src="../../js/funcoes.js"></script>

    <!-- ARQUIVOS FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="css/customADM.css">
    <link href='../../css/calendar/core/main.min.css' rel='stylesheet' />
    <link href='../../css/calendar/daygrid/main.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/calendar/personalizado.css">

    <!-- ARQUIVOS SCRIPT -->
    <link href="../../css/ionicons.min.css" rel="stylesheet">
    <link href="../../css/jquery.fancybox.css" rel="stylesheet">
    <link href="../../css/owl.carousel.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet" type="text/css"  />
    <link href="../../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../../js/modernizr.custom.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>
<body>




<div class="wrapper">
    <div class="container">

        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../img/images/logo.png" class="img-fluid"/><span>LACIF</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li  class="active">
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Painel Administrador</span></a>
                </li>





                <li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">border_color</i><span>Cadastro Geral</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li>
                            <a href="PainelAdminCadUsuario.php">Cadastrar Usuario</a>
                        </li>
                        <li>
                            <a href="PainelAdminCadConsulta.php">Cadastrar Consulta</a>
                        </li>
                    </ul>
                </li>






                <li  class="">
                    <a href="PainelAdminCalendario.php"><i class="material-icons">library_books</i><span>Agenda</span></a>
                </li>


                <li  class="">
                    <a href="../../lacif_home.php"><i class="material-icons">home</i><span>Home</span></a>
                </li>

            </ul>


        </nav>
    </div>


    <!-- Page Content  -->

    <!-- Page Content  -->
    <div id="content">

        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>

                    <a class="navbar-brand" href="#"> Painel Administrador </a>
                    <div class="menuhorizontal">

                        <ul class="language">
                            <?php

                            if ($exibirTipodeAcesso == "Administrador"){

                                ?>

                                <li><a href="../../lacif_exames.php">Meus Exames</a></li>
                                <li><a href="CrudConsultaListar.php">Gerenciar Consulta</a></li>
                                <li><a href="CrudUsuarioListar.php">Gerenciar Usuarios</a></li>
                                <li><a href="../../sair.php">Sair</a></li>
                                <li><a>  <?php  echo  "<font color='#FF0000'> Acesso: $exibirTipodeAcesso  </font>"?> </a></li>


                                <?php
                            }
                            ?>

                        </ul>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">

                        </div>
                    </div>
            </nav>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form action="#" method="POST" role="form">
                        <div class="panel panel-primary">
                            <br>
                            <div class="col-sm-12">
                                <h2 style="text-align:center; ">Cadastro de Agendamento</h2>
                            </div>
                            <div class="panel-body">

                                <div class="form-group">
                                    <label for="nome">NOME</label>
                                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="Digite o Nome Completo"  required>
                                </div>

                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="number" class="form-control" name="cpf"  id="cpf" placeholder="Digite o CPF"  required>
                                </div>

                                <div class="form-group">
                                    <label for="email">CELULAR</label>
                                    <input type="number"  class="form-control" name="celular" id="celular" placeholder="Digite o celular"  required>
                                </div>

                                <div class="form-group">
                                    <label for="convenio">convenio</label>
                                    <input type="text"  class="form-control" name="convenio" id="convenio" placeholder="Digite o convenio"  required>
                                </div>

                                <div class="form-group">
                                    <label for="data_cons">Data da Consulta</label>
                                    <input type="date"  class="form-control" name="data_cons" id="data_cons" placeholder="Digite a data da consulta"   required>
                                </div>

                                <div class="form-group">
                                    <label for="horario_cons">Horario da Consulta</label>
                                    <input type="time"  class="form-control" name="horario_cons" id="horario_cons" placeholder="Digite a data da consulta"   required>
                                </div>

                                <div class="form-group">
                                    <label for="Tipo Sanguineo">Tipo Sanguineo</label>
                                    <select id="tiposanguineo" class="form-control" name="tiposanguineo" class="box"  required>
                                        <option value=""selected>Selecione o tipo sanguineo...</option>
                                        <option value="O-">O-</option>
                                        <option value="O">O+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="AB">AB+</option>
                                        <option value="B-">B-</option>
                                        <option value="B">B+</option>
                                        <option value="A-">A-</option>
                                        <option value="A">A+</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Sexo">Sexo</label>

                                    <select class="form-control" id="sexo" name="sexo" class="box"  required>
                                        <option value="" selected>Selecione o sexo...</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Tipo de Exame">Tipo de Exame</label>

                                    <select class="form-control" id="tipo" name="tipo" class="box"  required>
                                        <option value="" selected>Selecione o Tipo do exame...</option>
                                        <option value="Covid19">Covid 19 </option>
                                        <option value="CheckuP">Check-Up</option>
                                        <option value="Sangue">Sangue</option>
                                        <option value="Fezes">Fezes</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div>
                            <input type="submit" name="agendar" id="agendar" class="btn btn-primary"  value="agendar">
                        </div>

                    </form>
                    <br>
                </div>
            </div>
        </div>

        <!-- INICIO - RODA PÉ -->
        <?php include_once('IncludeRodaPe2.php');?>
        <!-- FIM - RODA PÉ -->

        <!-- SCRIPT PARA O SIDEBAR FUNCIONAR-->
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });

                $('.more-button,.body-overlay').on('click', function () {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

            });

        </script>
        <!-- SCRIPT PARA O SIDEBAR FUNCIONAR-->

</body>

</html>



<?php
if (isset($_POST['agendar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $convenio = $_POST['convenio'];
    $data_cons = $_POST['data_cons'];
    $horario_cons = $_POST['horario_cons'];
    $tiposanguineo = $_POST['tiposanguineo'];
    $sexo = $_POST['sexo'];
    $tipo = $_POST['tipo'];


    // Fazer o insert  no banco de dados
    $query = "SELECT cons.* FROM ifsp_lacif.consultas cons WHERE cons.nome = '$nome' AND cons.cpf = '$cpf' AND cons.horario_cons";
    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0) {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    } else {
        $result = "INSERT INTO ifsp_lacif.consultas (nome, cpf, celular, convenio, data_cons, horario_cons, tiposanguineo, sexo, tipo) VALUES ('$nome', '$cpf', '$celular', '$convenio', '$data_cons', '$horario_cons', '$tiposanguineo', '$sexo', '$tipo')";
        mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        // echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudConsultaListar.php">';
    }
}
?>