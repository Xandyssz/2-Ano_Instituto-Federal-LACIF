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
    <!-- menu cabeçalho -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5"></div>
                <!-- end col-3 -->
                <div class="col-md-6 col-sm-5 hidden-xs">
                    <form>
                        <label>
                            <input type="text" placeholder="Posso ajudar?">
                            <input type="submit" value="BUSCAR">
                        </label>
                    </form>
                    <!-- end form -->
                </div>
                <!-- end col-6 -->
                <div class="col-md-3 col-sm-4 col-xs-7">
                    <ul class="language">
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="#"><img src="images/flag-brazil.png" alt="Image">PORTUGUES</a></li>
                    </ul>
                    <!-- end language -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->



    <!-- Inicio Menu -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Image"></a> </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">
                <form class="visible-xs">
                    <label>
                        <input type="text" placeholder="Type a word to find">
                    </label>
                    <input type="submit" value="SEARCH">
                </form>
                <!-- end form -->
                <ul class="social-media hidden-sm">
                    <li><a href="https://www.instagram.com/xanddy._/"><i class="ion-social-instagram-outline"></i></a></li>
                    <li><a href="https://twitter.com/xandyszz"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="https://github.com/Xandyssz"><i class="ion-social-github"></i></a></li>
                </ul>
                <!-- end social-media -->

                <ul class="nav navbar-nav">

                    <li><a href="index.php">Home</a></li>

                    <li><a href="#">Exames</a>
                        <ul><!-- menu suspenso dentro do menu original-->
                            <li><a href="AnaliseClinica.php">Análises Clínicas</a></li>
                        </ul>
                        <!-- end dropdown -->
                    </li>

                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact-us.php">Contato</a></li>
                </ul>
                <!-- FINAL MENU -->
                <!-- end nav -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
</header>
<!-- end header -->




<!-- FAQ -->
<section class="inner-content">
    <div class="form-group col-md-12">
        <input type="button" name="Cadastrar" class="btn btn-info" value="Cadastrar" onclick="window.location.href='crudAgendamento.php'"/>
        <input type="button" name="imprmir" class="btn btn-info" value="Imprimir" onclick="window.print();">
    </div>

    <br>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <th>Nome</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Convenio</th>
                <th>Tipo da Consulta </th>
                <th>Data da Consulta</th>
                <th>Horario da Consulta</th>
                <th>Tipo Sanguineo</th>
                <th>Sexo do Paciente</th>

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
                            <td><?php echo $cpf = $_POST['cpf']; ?></td>
                            <td><?php echo $celular = $_POST['celular']; ?></td>
                            <td><?php echo $convenio = $_POST['convenio']; ?></td>
                            <td><?php echo $tipo = $_POST['tipo']; ?></td>
                            <td>
                                <?php
                                // transformar a data do estilo dos EUA em BR
                                $data_usa = $_POST['data_cons'];
                                echo $data_brasil = date_format(date_create($data_usa), 'd/m/Y');
                                ?>
                            <td><?php echo $horario_cons = $_POST['horario_cons']; ?></td>

                            <td><?php echo $tiposanguineo = $_POST['tiposanguineo']?></td>

                            <td><?php echo $sexo = $_POST['sexo']?></td>

                            <td>
                                <?php echo "<a href='CrudConsultaEditar.php?id=" .
                                    "&nome=" . $nome .
                                    "&cpf=" . $cpf.
                                    "&celular=" . $celular .
                                    "&convenio=" . $convenio .
                                    "&tipo=" . $tipo .
                                    "&data_usa=" . $data_usa .
                                    "&horario_cons=" . $horario_cons .
                                    "&tiposanguineo=" . $tiposanguineo .
                                    "&sexo=" . $sexo .
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
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12"> <img src="images/logo-white.png" alt="Image" class="pull-left">
                <p class="copyright">Copyright © 2022 , IFSP</p>
            </div>
            <!-- end col-2 -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <form>
                    <h4>NOVIDADES</h4>
                    <p>att...</p>
                    <label>
                        <input type="text" placeholder="Insira seu Email">
                    </label>
                    <input type="submit" value="Junte-se a nos">
                </form>
            </div>
            <!-- end col-4 -->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="AnaliseClinica.php">Análises Clinicas</a></li>
                    <li><a href="faq.php">Faq</a></li>
                    <li><a href="contact-us.php">Contact us</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h4>Our Sercices</h4>
                <ul>
                    <li><a href="#">Cardiovascular</a></li>
                    <li><a href="#">Ophthalmology</a></li>
                    <li><a href="#">Dermatology</a></li>
                    <li><a href="#">General Surgery</a></li>
                    <li><a href="#">Consultative</a></li>
                    <li><a href="#">Diagnostic</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-12">
                <h4>Social Medicana</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google Plus</a></li>
                    <li><a href="#">Linkedin</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->

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