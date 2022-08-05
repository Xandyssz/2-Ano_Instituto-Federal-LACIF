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

  <!-- TITULO DA PÁGINA -->
  <title>LACIF</title>
  <meta name="IFSP" content="...">

  <!-- LOGOS EM DIMENSÕES DIFERENTES -->
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

  <!-- ARQUIVOS JAVASCRIPT -->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

</head>
<body>


<!-- INICIO - MENU CABEÇALHO -->
<?php include_once('IncludeHeaderADM.php');?>
<!-- FIM - MENU CABEÇALHO -->


<!-- INICIO - FAQ DE EXAMES -->
<?php include_once('IncludeExameAnalises.php');?>
<!-- FIM - FAQ DE EXAMES -->




<!-- INICIO - BARRA DO RODA PÉ -->
<section class="footer-bar">
  <div class="container"></div>
  </section>
<!-- FIM - BARRA DO RODA PÉ -->




<!-- INICIO - RODA PÉ -->
<?php include_once('IncludeRodaPe.php');?>

<!-- FIM - RODA PÉ -->

</body>
</html>