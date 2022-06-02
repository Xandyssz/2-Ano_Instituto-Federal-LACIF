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
                        <li><a href="CrudAgendamento.php">Consulta</a></li>

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




<!-- INICIO SCRIPT CONTATO -->

<script type="text/javascript">

    // validate contact form
    $(function() {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                surname: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                city: {
                    required: true,
                    minlength: 2
                },
                state: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Please type your name",
                    minlength: "Please type your name correctly"
                },
                surname: {
                    required: "Please type your surname",
                    minlength: "Please type your surname correctly"
                },
                phone: {
                    required: "Please type your phone number",
                    minlength: "Please type your phone number correctly"
                },
                email: {
                    required: "Please type your e-mail correctly"
                },
                city: {
                    required: "Please type your city",
                    minlength: "Please type your city correctly"
                },
                state: {
                    required: "Please type your state",
                    minlength: "Please type your state correctly"
                },
                subject: {
                    required: "Please type about subject",
                    minlength: "To short subject"
                },
                message: {
                    required: "Please type your message",
                    minlength: "To short message"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"process.php",
                    success: function() {
                        $('#contact-form :input').attr('disabled', 'disabled');
                        $('#contact-form').fadeTo( "slow", 0, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function() {
                        $('#contact-form').fadeTo( "slow", 0, function() {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
</script>



<!-- FINAL SCRIPT CONTATO -->



<!-- FAQ -->

<!-- end inner header -->
<section class="inner-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="left-side">
                    <h1 class="title-bottom-line">FORMULARIO DE <strong>CONTATO</strong></h1>
                    <p>nao sei oque por nao, preenche ae.</p>
                    <form id="contact-form">
                        <label for="name"></label><input type="text" name="name" id="name" placeholder="Seu Nome">
                        <label for="surname"></label><input type="text" name="surname" id="surname" placeholder="SobreNome">
                        <label for="phone"></label><input type="text" name="phone" id="phone" placeholder="Celular">
                        <label for="email"></label><input type="text" name="email" id="email" placeholder="E-mail">
                        <label for="city"></label><input type="text" name="city" id="city" placeholder="Cidade">
                        <label for="state"></label><input type="text" name="state" id="state" placeholder="Estado">
                        <label for="subject"></label><input type="text" name="subject" id="subject" placeholder="Motivo do seu contato" class="subject">
                        <label for="message"></label><textarea name="message" id="message" placeholder="Sua mensagem"></textarea>
                        <input type="submit" name="submit" value="ENVIAR">
                    </form>
                    <div id="success">
                        <p>Sua mensagem foi enviada com sucesso! Entraremos em contato assim que pudermos.</p>
                    </div>
                    <div id="error">
                        <p>Algo deu errado, tente atualizar e enviar o formulário novamente.</p>
                    </div>
                </div>
            </div>
            <!-- end left side -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="side-bar">
                    <h1 class="title-bottom-line"><strong>SEDE</strong> OFICIAL</h1>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Laboratório de Análises Clínicas - IF</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body gray-bg">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.869898831968!2d-52.11370228501676!3d-21.785295704290643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949198d8b971a46f%3A0xa778e28b9c04cf8b!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20C%C3%A2mpus%20Presidente%20Epit%C3%A1cio!5e0!3m2!1spt-BR!2sbr!4v1646855594129!5m2!1spt-BR!2sbr" style=" width:100%; height:140px; border:0"></iframe>
                                    <p><strong>LACIF</strong></p>
                                    <p>R. José Ramos Júnior, 27-50 - Jardim Tropical, Pres. Epitácio - SP, 19470-000<br>
                                        SP</p>
                                    <h3>+55 (18) 3281-9599</h3>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- end right side -->
        </div>
        <!-- end row -->
    </div>
</section>


<!-- finalFAQ -->





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
                    <li><a href="AnaliseClinica.php">Análises Clinicas</a></li>
                    <li><a href="EstudoGenetico.html">Estudos Genéticos</a></li>
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