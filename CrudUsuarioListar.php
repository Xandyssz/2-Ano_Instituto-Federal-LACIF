<?php
session_start();
include_once('sessao.php');
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' type='text/css'>
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
        <input type="button" name="Cadastrar" class="btn btn-info" value="Cadastrar" onclick="window.location.href='CrudUsuarioCadastrar.php'"/>
        <input type="button" name="imprmir" class="btn btn-info" value="Imprimir" onclick="window.print();">
    </div>

    <br>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Senha</th>
                <th>Data Nascimento</th>
                <th>NumeroContato</th>
                <th>Endereco</th>
                <th>Nivel de Acesso</th>
                <th>Acoes</th>
                </thead>
                <?php

                $pesquisar = filter_input(INPUT_POST, 'Pesquisar', FILTER_SANITIZE_STRING);


                //para negar algo se usa !
                if(!isset($Pesquisar)){
                    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                    if(isset($nome)){

                        ?>
                <tbody style="font-size:12px">
                <tr>

                    <td><?php echo $nome = $_POST['nome']; ?></td>
                    <td><?php echo $email = $_POST['email']; ?></td>
                    <td><?php echo $cpf = $_POST['cpf']; ?></td>
                    <td><?php echo $senha = $_POST['senha']; ?></td>
                    <td>
                        <?php
                        // transformar a data do estilo dos EUA em BR
                        echo $data_brasil = date_format(date_create(), 'd/m/Y');
                        ?>
                    <td><?php echo $celular = $_POST['celular']?></td>

                    <td><?php echo $endereco = $_POST['endereco']?></td>

                    <!-- </td> -->
                    <td>
                        <!-- NIVEL DE ACESSO AQUI -->
                    </td>
                    <td>
                        <?php echo "<a href='CrudUsuarioEditar.php?id=" .
                            "&nome=" . $nome .
                            "&email=" . $email.
                            "&senha=" . $senha .
                            "&cpf=" . $cpf .
                            "&data_usa=" . $data_brasil .
                            "&celular=" . $celular .
                            "&endereco=" . $endereco .
                            // "&nivelAcesso=" . $nivelAcesso .
                            "' 
                                    title='Alterar'><i class='fa fa-edit fa-2x'></i></a>" ?>

                        <?php echo "<a href='' onclic='corfirmarExclusaoFuncionario()' title='Excluir'><i class='fa fa-trash fa-2x'></i></a>" ?>
                    </td>
                </tr>
                </tbody>
                <?php
                    }
                }
                ?>
                </td>
                </tr>

            </table>
</section>

<!-- final faq -->





<!-- end logos -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- end footer-bar -->

<?php include_once('IncludeRodaPe.php');?>

<script type='text/javascript' src="js/jquery.min.js"></script>
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
</body>
</html>