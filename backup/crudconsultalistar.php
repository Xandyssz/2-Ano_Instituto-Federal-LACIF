<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');
$exibirTipodeAcesso = $_SESSION['tipo_acesso'];
?>

<!DOCTYPE html>
<!--ALTERAR COR DO SITE EM STYLE.CSS -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <!-- titulo da pagina-->
    <title>LACIF</title>

    <meta name="author" content="...">

    <!-- ARQUIVOS FAVICON -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">
    <link href="maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' href='cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ARQUIVOS CSS -->
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css"  />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>


    <!-- HTML5 shim e Respond.js para suporte ao IE8 de elementos HTML5 e consultas de mídia -->
    <!-- AVISO: Respond.js não funciona se você visualizar a página via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5"></div>
                <!-- end col-3 -->
                <div class="col-md-6 col-sm-5 hidden-xs">

                    <!-- end form -->
                </div>
                <!-- end col-6 -->

                <div class="menuzinho">

                    <ul class="language">
                        <?php
                        if ($exibirTipodeAcesso == "Administrador"){

                            ?>

                            <li><a href="exames.php">Meus Exames</a></li>
                            <li><a href="CrudConsultaListar.php">Gerenciar Consulta</a></li>
                            <li><a href="CrudUsuarioListar.php">Gerenciar Usuarios</a></li>

                            <li><a><?php echo "Acesso:" . $exibirTipodeAcesso ?></a></li>

                            <?php
                        } elseif($exibirTipodeAcesso == "Paciente"){
                            ?>
                            <li><a href="exames.php">Meus Exames</a></li>
                            <li><a href="CrudConsultaAgendamento.php">Agendar Consulta</a></li>
                            <li><a><?php echo "Acesso:" . $exibirTipodeAcesso ?></a></li>

                            <?php
                        }elseif($exibirTipodeAcesso == "Doutor"){
                            ?>
                            <li><a href="exames.php">Visualizar Exames</a></li>
                            <li><a href="CrudConsultaListar.php">Gerenciar Consulta</a></li>
                            <li><a href="CrudUsuarioListar.php">Gerenciar Usuarios</a></li>
                            <li><a><?php echo "Acesso:" . $exibirTipodeAcesso ?></a></li>

                            <?php
                        } elseif ($exibirTipodeAcesso == "Recepcionista"){
                            ?>
                            <li><a href="CrudConsultaAgendamento.php">Agendar Consulta</a>
                            </li>
                            <li><a href="CrudUsuarioListar.php">Gerenciar Usuarios</a></li>
                            <li><a href="CrudConsultaListar.php">Gerenciar Consulta</a></li>
                            <li><a><?php echo "Acesso:" . $exibirTipodeAcesso ?></a></li>
                        <?php  }
                        ?>
                        <li><a href="sair.php">Sair</a></li>



                    </ul>
                    <!-- end language -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</header>
<!-- end header -->




<!-- FAQ -->
<section class="container-fluid">
    <div class="form-group col-md-12">
        <input type="button" name="Cadastrar" class="btn btn-info" value="Cadastrar" onclick="window.location.href='CrudConsultaAgendamento.php'"/>
        <input type="button" name="imprmir" class="btn btn-info" value="Imprimir" onclick="window.print();">
    </div>

    <br>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <th>Codigo</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Convenio</th>
                <th>Data da Consulta</th>
                <th>Horario da Consulta</th>
                <th>Tipo Sanguineo</th>
                <th>Tipo da Consulta </th>
                <th>Sexo do Paciente</th>
                <th>Status do Exame</th>
                <th>Acoes</th>
                </thead>
                <tbody>

                <?php
                $query = "SELECT * FROM ifsp_lacif.consultas order by idconsulta";
                $dados = mysqli_query($conn, $query ); // comando transação bd

                while ($linha = mysqli_fetch_assoc($dados)){

                    ?>
                    <tr>
                        <td><?php  echo $linha['idconsulta']; ?></td>
                        <td><?php  echo $linha['nome']; ?></td>
                        <td><?php  echo $linha['cpf']; ?></td>
                        <td><?php  echo $linha['celular']; ?></td>
                        <td><?php  echo $linha['convenio']; ?></td>
                        <td><?php  echo $linha['data_cons']; ?></td>
                        <td><?php  echo $linha['horario_cons']; ?></td>
                        <td><?php  echo $linha['tiposanguineo']; ?></td>
                        <td><?php  echo $linha['tipo'];?></td>
                        <td><?php  echo $linha['sexo'];?></td>
                        <td><?php  echo $linha['status'];?></td>
                        <td>
                            <?php
                            echo "<a href='CrudConsultaEditar.php?id=".$linha['idconsulta']."' title='Alterar'><i class='fa fa-pencil-square'></i></a>";
                            echo " ";
                            $idConsulta = $linha['idconsulta'];
                            echo "<a href='#' title='Excluir' onclick='confirmacaoExclusaoUsuario($idConsulta);'><i class='fa fa-trash'></i></a>";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>

            </table>
</section>

<!-- final faq -->

<!-- end logos -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- end footer-bar -->

<?php include_once('IncludeRodaPe.php');?>
<!-- end footer -->

<script type=text/javascript' src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.stellar.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/queryloader2.min.js" type="text/javascript"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="js/jquery.ba-cond.min.js" type="text/javascript" ></script>
<script src="js/jquery.slitslider.js" type="text/javascript" ></script>
<script src="js/slider-settings.js"></script>
<script src="js/medicina.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
</body>
</html>