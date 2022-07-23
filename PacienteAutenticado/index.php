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
    <link href="../ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="../ico/favicon.png" rel="shortcut icon">

    <!-- ARQUIVOS CSS -->
    <link href="../css/ionicons.min.css" rel="stylesheet">
    <link href="../css/jquery.fancybox.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/datepicker.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../js/modernizr.custom.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="../css/styleNoJS.css" />
    </noscript>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

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
                        <li><a href="exames.php">Exames</a></li>
                        <li><a href="../Crud_Consulta/CrudConsultaAgendamento.php">Agendar Consulta</a></li>
                        <li><a><?php
                                if(isset($_SESSION['logado'])){
                                    session_destroy();
                                    header("Location:index.php");
                                }
                                echo " <a href='../index.php'>Sair</a>";
                                ?></a></li>
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
                <a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt="Image"></a> </div>
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
<section class="slider">
    <div class="demo-2">
        <div id="slider" class="sl-slider-wrapper">
            <div class="sl-slider">
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-1"></div>
                        <div class="content">
                            <h2>??<u>??</u><br>
                                ??</h2>
                            <img src="../images/pulse.png" alt="Image"><br>
                            <a href="#" class="btn-turquaz-lg">SAIBA MAIS</a> </div>
                        <!-- end content -->
                    </div>
                    <!-- end sl-slide-inner -->
                </div>
                <!-- end sl-slide -->
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-2"></div>
                        <div class="content">
                            <h2>Nossa sala de <u>MRI</u> <br>
                                Foi renovada para nossos pacientes</h2>
                            <img src="../images/pulse.png" alt="Image"><br>
                            <a href="#" class="btn-turquaz-lg">SAIBA MAIS</a> </div>
                        <!-- end content -->
                    </div>
                    <!-- end sl-slide-inner -->
                </div>
                <!-- end sl-slide -->
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-3"></div>
                        <div class="content">
                            <h2>Suporte <u>online</u> muito<br>
                                fácil de obter em nosso novo site</h2>
                            <img src="../images/pulse.png" alt="Image"><br>
                            <a href="#" class="btn-turquaz-lg">SAIBA MAIS</a> </div>
                        <!-- end content -->
                    </div>
                    <!-- end sl-slide-inner -->
                </div>
                <!-- end sl-slide -->
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-4"></div>
                        <div class="content">
                            <h2>30% <u>de desconto</u> para <br>
                                pacientes de tratamento especial</h2>
                            <img src="../images/pulse.png" alt="Image"><br>
                            <a href="#" class="btn-turquaz-lg">SAIBA MAIS</a> </div>
                        <!-- end content -->
                    </div>
                    <!-- end sl-slide-inner -->
                </div>
                <!-- end sl-slide -->
            </div>
            <!-- sl-slider -->
            <nav id="nav-arrows" class="nav-arrows"> <span class="nav-arrow-prev">Previous</span> <span class="nav-arrow-next">Next</span> </nav>
            <!-- end nav-arrows -->
            <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> <span></span> <span></span> </nav>
            <!-- end nav-dots -->
        </div>
        <!-- end sl-slider-wrapper -->
    </div>
    <!-- end demo2 -->
</section>
<!-- end appointment -->
<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">

                <div class="title-box">
                    <br>
                    <br>
                    <h2>ULTIMAS NOTICIAS</h2>
                    <h5>SEI LA OQUE ESCREVER</h5>
                </div>
                <!-- end title-box -->
            </div>
            <!-- end col-12 -->
            <div class="col-md-6 col-xs-12">
                <div class="left">
                    <div class="article-image"><img src="../images/noticias/noticia1.webp" alt="Image"> </div>
                    <img src="../images/rated-article.png" alt="Image" class="rated-article">
                    <h3>EM: <strong>CORONAVÍRUS</strong> </h3>
                    <small>Postado <strong>01 de Agosto </strong>by ADM</small>
                    <p>Covid: em que situações devo fazer check-up após infecção?</p>
                    <a href="noticias.php" class="btn-turquaz-md">LEIA MAIS</a> </div>
                <!-- end left -->
            </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-xs-12">
                <div class="left">
                    <div class="article-image"><img src="../images/noticias/noticia2.webp" alt="Image"> </div>
                    <img src="../images/rated-article.png" alt="Image" class="rated-article">
                    <h3>EM: <strong>MUNDO</strong> </h3>
                    <small>Postado <strong>01 de Agosto </strong>by ADM</small>
                    <p>Mundo: OMS alerta para nova onda de covid na Europa</p>
                    <a href="noticias.php" class="btn-turquaz-md">LEIA MAIS</a> </div>
                <!-- end right -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end home-services -->

<!-- end latest-news -->
<section class="frase overlay text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 no-padding"> <img src="../images/icon4.png" alt="Image">
                <h2>Check-up mensais</h2>
                <a href="faq.php" class="btn-ghost-lg">SAIBA MAIS</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end frase -->


<!-- end boxed-image-feature -->
<section class="logos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="title-box">
                    <h2>Patrocinadores</h2>
                </div>
                <!-- end title-box -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-logos">
                    <div class="item1"> <img src="../images/patrocinadores/unimed.png" alt=""> </div>
                    <div class="item2"> <img src="../images/patrocinadores/Allianz.png" alt=""> </div>
                    <div class="item3"> <img src="../images/patrocinadores/bradesco.png" alt=""> </div>
                    <div class="item4"> <img src="../images/patrocinadores/prevent_senior.png" alt=""> </div>
                </div>
                <!-- end owl-logos -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end logos -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- end footer-bar -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12"> <img src="../images/logo-white.png" alt="Image" class="pull-left">
                <p class="copyright">Copyright © 2022 , IFSP</p>
            </div>
            <!-- end col-2 -->
            <div class="col-md-4 col-sm-12 col-xs-12">

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
            <div class="col-md-2 col-sm-4 col-xs-12">
                <h4>Social Media</h4>
                <ul>
                    <li><a href="https://www.instagram.com/xanddy._/">Instagram</a></li>
                    <li><a href="https://twitter.com/xandyszz">Twitter</a></li>
                    <li><a href="https://github.com/Xandyssz">GitHub</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->

<script type='text/javascript' src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/jquery.stellar.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/queryloader2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/jquery.fancybox.js"></script>
<script src="../js/jquery.maskedinput.js"></script>
<script src="../js/jquery.ba-cond.min.js" type="text/javascript" ></script>
<script src="../js/jquery.slitslider.js" type="text/javascript" ></script>
<script src="../js/slider-settings.js"></script>
<script src="../js/medicina.js"></script>
</body>
</html>