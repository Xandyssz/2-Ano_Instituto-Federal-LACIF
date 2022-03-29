<?php

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

    <!-- ARQUIVOS CSS -->
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
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
                        <li><a href="login.html">LOGIN</a></li>
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

                    <li><a href="Covid19.html">COVID-19</a></li>

                    <li><a href="index.php">Home</a></li>

                    <li><a href="#">Exames</a>
                        <ul><!-- menu suspenso dentro do menu original-->
                            <li><a href="AnaliseClinica.html">Análises Clínicas</a></li>
                            <li><a href="EstudoGenetico.html">Estudos Genéticos</a></li>
                        </ul>
                        <!-- end dropdown -->
                    </li>

                    <li><a href="teste.html">Noticias</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact-us.html">Contato</a></li>
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
                            <img src="images/pulse.png" alt="Image"><br>
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
                            <img src="images/pulse.png" alt="Image"><br>
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
                            <img src="images/pulse.png" alt="Image"><br>
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
                            <img src="images/pulse.png" alt="Image"><br>
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
<!-- end slider -->
    <section class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Compromissos</h2>
                </div>
                <!-- end col-12 -->
                <form>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label>Nome do Paciente</label>
                        <label>
                            <input type="text">
                        </label>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label>Telefone</label>
                        <label for="phone"></label><input type="text" id="phone">
                    </div>
                    <!-- end col-4 -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label>E-mail</label>
                        <label>
                            <input type="text">
                        </label>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-xs-12">
                        <hr>
                    </div>
                    <!-- end col-12 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 date">
                        <label>Selecione a data</label>
                        <label>
                            <input type="text" class="datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" maxlength="8">
                        </label>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-4 col-sm-6 col-xs-10 department">
                        <label>Department</label>
                        <label>
                            <select>
                                <option>Cardiologia</option>
                            </select>
                        </label>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-4 col-sm-12 col-xs-12 gender">
                        <label>
                            <input type="radio" checked>
                        </label>
                        <label>Homem</label>
                        <label>
                            <input type="radio">
                        </label>
                        <label>Mulher</label>
                        <input type="submit" value="Confirmar">
                    </div>
                    <!-- end col-4 -->
                </form>
                <!-- end form -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
<!-- end appointment -->
<section class="home-services text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="title-box">
                    <h2>Especialistas</h2>
                    <h5>Consulte nossos especialistas</h5>
                </div>
                <!-- end title-box -->
            </div>
            <!-- end col-12 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <div class="line">
                        <div class="icon"><img src="images/icon1.png" alt="Icon"> </div>
                    </div>
                    <h3>Cardiologista</h3>
                    <p>Cardiologista...</p>
                </div>
                <!-- end content -->
            </div>
            <!-- end col-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <div class="line">
                        <div class="icon"><img src="images/icon2.png" alt="Icon"></div>
                    </div>
                    <h3>oftalmologista</h3>
                    <p>Coftalmologista...</p>
                </div>
                <!-- end content -->
            </div>
            <!-- end col-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <div class="line">
                        <div class="icon"><img src="images/icon3.png" alt="Icon"></div>
                    </div>
                    <h3>Neurologista</h3>
                    <p>Neurologista...</p>
                </div>
                <!-- end content -->
            </div>
            <!-- end col-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <div class="icon"><img src="images/icon4.png" alt="Icon"></div>
                    <h3>Dermatologista</h3>
                    <p>Dermatologista...</p>
                </div>
                <!-- end content -->
            </div>
            <!-- end col-3 -->
            <div class="col-xs-12"> <a href="#" class="btn-turquaz-md">Ver Outros</a> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end home-services -->
<section class="box-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                <div class="first-box">
                    <div class="icon"><img src="images/icon1.png" alt="Icon"></div>
                    <div class="content">
                        <h3>AGENDAMENTO</h3>
                        <p>Call emergency appointment number for emergency service.</p>
                        <a href="#" class="btn-ghost-md">ABOUT MORE</a> </div>
                    <!-- end content -->
                </div>
                <!-- end first-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                <div class="second-box">
                    <div class="icon"><img src="images/icon2.png" alt="Icon"></div>
                    <div class="content">
                        <h3>CHECK UP</h3>
                        <p>Call emergency appointment number for emergency service.</p>
                        <a href="#" class="btn-ghost-md">ABOUT MORE</a> </div>
                    <!-- end content -->
                </div>
                <!-- end second-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                <div class="third-box">
                    <div class="icon"><img src="images/icon3.png" alt="Icon"></div>
                    <div class="content">
                        <h3>OTHER CLINICS</h3>
                        <p>Call emergency appointment number for emergency service.</p>
                        <a href="#" class="btn-ghost-md">ABOUT MORE</a> </div>
                    <!-- end content -->
                </div>
                <!-- end third-box -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end box-content -->
<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="title-box">
                    <h2>ULTIMAS NOTICIAS</h2>
                    <h5>SEI LA OQUE ESCREVER</h5>
                </div>
                <!-- end title-box -->
            </div>
            <!-- end col-12 -->
            <div class="col-md-6 col-xs-12">
                <div class="left">
                    <div class="article-image"><img src="images/image8.jpg" alt="Image"> </div>
                    <img src="images/rated-article.png" alt="Image" class="rated-article">
                    <h3>TRATAMENTO <strong>ESPECIAL</strong> </h3>
                    <small>Postado <strong>28 de março </strong>by ADM</small>
                    <p>ainda nao sei oque escrever </p>
                    <a href="#" class="btn-turquaz-md">LEIA MAIS</a> </div>
                <!-- end left -->
            </div>
            <!-- end col-6 -->
            <div class="col-md-6 col-xs-12">
                <div class="right">
                    <div class="article-image"><img src="images/image9.jpg" alt="Image"></div>
                    <img src="images/rated-article.png" alt="Image" class="rated-article">
                    <h3>CENTRO DE <strong>DOENÇAS</strong></h3>
                    <small>Postado <strong>28 de março </strong>by ADM</small>
                    <p>ainda nao sei oque escrever </p>
                    <a href="#" class="btn-turquaz-md">LEIA MAIS</a> </div>
                <!-- end right -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end latest-news -->
<section class="frase overlay text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 no-padding"> <img src="images/icon4.png" alt="Image">
                <h2>Check-up mensais</h2>
                <h4>Combine o seu Check-up no Nosso Hospital !</h4>
                <a href="#" class="btn-ghost-lg">SAIBA MAIS</a> </div>
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
                    <h5>faça sua propaganda</h5>
                </div>
                <!-- end title-box -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-logos">
                    <div class="item"> <img src="images/partner-logo1.jpg" alt="Image"> </div>
                    <div class="item"> <img src="images/partner-logo2.jpg" alt="Image"> </div>
                    <div class="item"> <img src="images/partner-logo3.jpg" alt="Image"> </div>
                    <div class="item"> <img src="images/partner-logo4.jpg" alt="Image"> </div>
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
                    <li><a href="Covid19.html">COVID19</a></li>
                    <li><a href="AnaliseClinica.html">Análises Clinicas</a></li>
                    <li><a href="EstudoGenetico.html">Estudos Genéticos</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="contact-us.html">Contact us</a></li>
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