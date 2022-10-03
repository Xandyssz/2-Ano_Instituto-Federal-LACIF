<?php
session_start();
include_once('sessao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <!-- titulo da pagina-->
    <title>LACIF - CONTATO</title>

    <meta name="author" content="...">

    <!-- ARQUIVOS FAVICON -->
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
<!-- FIM - MENU CABEÇALHO -->


<!-- INICIO SCRIPT CONTATO -->
<script type="text/javascript">
    // validate contact form
    $(function () {
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
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serialize(),
                    url: "process.php",
                    success: function () {
                        $('#contact-form :input').attr('disabled', 'disabled');
                        $('#contact-form').fadeTo("slow", 0, function () {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor', 'default');
                            $('#success').fadeIn();
                        });
                    },
                    error: function () {
                        $('#contact-form').fadeTo("slow", 0, function () {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    });
</script>
<!-- FINAL SCRIPT CONTATO -->


<!-- INICIO - CONTATO -->
<?php include_once('IncludeContato.php'); ?>
<!-- FIM - CONTATO -->


<!-- INICIO - BARRA DO RODA PÉ -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- FIM - BARRA DO RODA PÉ -->


<!-- INICIO - RODA PÉ -->
<?php include_once('IncludeRodaPe.php'); ?>
<!-- FIM - RODA PÉ -->


</body>
</html>