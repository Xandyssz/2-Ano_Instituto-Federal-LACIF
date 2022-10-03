<?php
session_start();
include_once('sessao.php');
include("config/config.php");
$exibirTipodeAcesso = $_SESSION['tipo_acesso'];
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendário Agenda com PHP</title>

    <!-- ARQUIVOS JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- ARQUIVOS FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="css/customADM.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="../../css/ionicons.min.css" rel="stylesheet">
    <link href="../../css/jquery.fancybox.css" rel="stylesheet">
    <link href="../../css/owl.carousel.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet" type="text/css"  />
    <link href="../../css/style.css" rel="stylesheet">

    <!-- ARQUIVOS SCRIPT -->
    <script type="text/javascript" src="../../js/modernizr.custom.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!--    ------------->
    <link rel="stylesheet" href="<?php echo DIRPAGE.'lib/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.css'; ?>">

</head>
<body>


<div class="wrapper">
    <div class="container">

        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../../images/logo.png" class="img-fluid"/><span>LACIF</span></h3>
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
                    <a href="#"><i class="material-icons">library_books</i><span>Agenda</span></a>
                </li>

                <li  class="">
                    <a href="../../lacif_home.php"><i class="material-icons">home</i><span>Home</span></a>
                </li>

            </ul>

        </nav>
    </div>

    <div id="content">

        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>

                    <a class="navbar-brand" href="#"> Agenda </a>
                    <div class="menuhorizontal">

                        <ul class="language">
                            <?php

                            if ($exibirTipodeAcesso == "Administrador"){

                                ?>

                                <li><a href="../../lacif_exames.php">Meus Exames</a></li>
                                <li><a href="CrudConsultaListar.php">Gerenciar Consulta</a></li>
                                <li><a href="CrudUsuarioListar.php">Gerenciar Usuarios</a></li>
                                <li><a href="../../sair.php">Sair</a></li>
                                <li><a>  <?php  echo  "<font color='#FF0000'> Acesso: $exibirTipodeAcesso  </font>"?></a></li>


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

        <br>
        <p></p>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

<div class="calendar"></div>

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

<script src="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.js'; ?>"></script>
<script src="<?php echo DIRPAGE.'lib/js/javascript.js'; ?>"></script>
</body>
</html>