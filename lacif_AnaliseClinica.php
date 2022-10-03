<?php
session_start();
include_once('sessao.php');
?>

<!DOCTYPE html>
<!--ALTERAR COR DO SITE EM STYLE.CSS -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <!-- TITULO DA PÁGINA -->
    <title>LACIF - ANÁLISES CLÍNICA</title>
    <meta name="IFSP" content="...">

    <!-- LOGOS EM DIMENSÕES DIFERENTES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- ARQUIVOS CSS -->
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- ARQUIVOS SCRIPT -->
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body>


<!-- INICIO - MENU CABEÇALHO -->
<?php

if (isset($_SESSION['cpf'])) {

    $exibirTipodeAcesso = $_SESSION['tipo_acesso'];
    include_once('IncludeHeaderADM.php');

} else {
    include_once('IncludeHeader.php');
}
?>
<!-- FIM - MENU CABEÇALHO!! -->


<!-- INICIO - FAQ DE EXAMES -->
<?php include_once('IncludeExameAnalises.php'); ?>
<!-- FIM - FAQ DE EXAMES -->


<!-- INICIO - BARRA DO RODA PÉ -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- FIM - BARRA DO RODA PÉ -->


<!-- INICIO - RODA PÉ -->
<?php include_once('IncludeRodaPe.php'); ?>

<!-- FIM - RODA PÉ -->

<!-- ARQUIVOS SCRIPT -->
<script src="js/medicina.js"></script>
</body>
</html>