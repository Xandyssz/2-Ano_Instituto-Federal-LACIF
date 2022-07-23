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
  <link href="../css/custom.css" rel="stylesheet" type="text/css"  />
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/teste2.css" rel="stylesheet">
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
              <li><a href="exames.php">Meus Exames</a></li>
              <li><a href="../CrudConsultaAgendamento.php">Agendar Consulta</a></li>
              <li><a href="#"><img src="../images/flag-brazil.png" alt="Image">PORTUGUES</a></li>
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




<!-- FAQ -->
<section class="blogs" id="blogs">

  <h1 class="heading"> ULTIMAS <span>NOTICIAS</span> </h1>

  <div class="box-container">

    <!-- PRIMEIRA CAIXA DE NOTICIAS-->
    <div class="box">
      <div class="image">
        <img src="../images/blog-1.jpg" alt="">
      </div>
      <div class="content">
        <div class="icon">
          <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
          <a href="#"> <i class="fas fa-user"></i> by admin </a>
        </div>
        <h3>vacinas do COVID-19</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
        <a href="#" class="btn"> saiba mais <span class="fas fa-chevron-right"></span> </a>

      </div>
    </div>

    <!-- SEGUNDA CAIXA DE NOTICIAS-->
    <div class="box">
      <div class="image">
        <img src="../images/blog-2.jpg" alt="">
      </div>
      <div class="content">
        <div class="icon">
          <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
          <a href="#"> <i class="fas fa-user"></i> by admin </a>
        </div>
        <h3>a situação da telemedicina no mundo</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
        <a href="#" class="btn"> Saiba Mais <span class="fas fa-chevron-right"></span> </a>


      </div>
    </div>

    <!-- TERCEIRA CAIXA DE NOTICIAS-->
    <div class="box">
      <div class="image">
        <img src="../images/blog-3.jpg" alt="">
      </div>
      <div class="content">
        <div class="icon">
          <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
          <a href="#"> <i class="fas fa-user"></i> by admin </a>
        </div>
        <h3>como a insulina combate a diabete</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
        <a href="#" class="btn"> saiba mais <span class="fas fa-chevron-right"></span> </a>

      </div>
    </div>
    <!-- QUARTA CAIXA DE NOTICIAS-->

  </div>

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
      <div class="col-md-2 col-sm-12 col-xs-12"> <img src="../images/logo-white.png" alt="Image" class="pull-left">
        <p class="copyright">Copyright © 2022 , IFSP</p>
      </div>
      <!-- end col-2 -->
      <div class="col-md-4 col-sm-12 col-xs-12">
        <form>
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