<?php
session_start();
//verifica se tem sessão e se está tudo ok!
include_once('sessao.php');
//chama a conecao com banco de dados
include_once('conexao.php');

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}
?>


<!DOCTYPE html>
<!--ALTERAR COR DO SITE EM STYLE.CSS -->
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <!-- titulo da pagina-->
    <title>LACIF - Gerenciar Consultas</title>

    <meta name="author" content="...">

    <!-- ARQUIVOS FAVICON -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- ARQUIVOS FONTES -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ARQUIVOS JAVASCRIPT -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script src="js/funcoes.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<header>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5"></div>
                <div class="col-md-6 col-sm-5 hidden-xs">

                </div>

                <?php

                if (isset($_SESSION['cpf'])) {

                    $exibirTipodeAcesso = $_SESSION['tipo_acesso'];
                    include_once('IncludeHeaderADM.php');

                } else {
                    include_once('IncludeHeader.php');
                }
                ?>

                </div>
            </div>
        </div>
    </div>
</header>




<!-- inicio tabela  -->
<section class="container-fluid">
    <div class="form-group col-md-12">

    </div>

    <br>

    <div class="row">
        <div class="col-sm-12">
            <input type="button" name="Cadastrar" class="btn btn-info" value="Cadastrar" onclick="window.location.href='CrudConsultaAgendamento.php'"/>

            <div class="table-responsive">
                <br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <th>ID</th>
                    <th>Nome do Usuario</th>
                    <th>Descrição</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                    <th>Convenio</th>
                    <th>Celular</th>
                    <th>CPF</th>
                    <th>Tipo Sanguineo</th>
                    <th>Tipo da Consulta</th>
                    <th>Sexo</th>
                    <th>Status</th>
                    <th>Ações</th>
                    </thead>
                    <tbody>

                    <?php
                    $query = "SELECT * FROM ifsp_lacif.consultas order by id";
                    $dados = mysqli_query($conn, $query ); // comando transação bd
                    while ($linha = mysqli_fetch_assoc($dados)){
//                        $IniciodataBrasil = implode('-', array_reverse(explode('/', $start)));
//                        $FimdataBrasil = implode('-', array_reverse(explode('/', $end)));

                        ?>
                        <tr>
                            <td><?php  echo $linha['id']; ?></td>
                            <td><?php  echo $linha['title']; ?></td>
                            <td><?php  echo $linha['description']; ?></td>
                            <td><?php  echo $linha['start']; ?></td>
                            <td><?php  echo $linha['end']; ?></td>
                            <td><?php  echo $linha['convenio']; ?></td>
                            <td><?php  echo $linha['celular']; ?></td>
                            <td><?php  echo $linha['cpf']; ?></td>
                            <td><?php  echo $linha['tiposanguineo']; ?></td>
                            <td><?php  echo $linha['tipo']; ?></td>
                            <td><?php  echo $linha['sexo']; ?></td>
                            <td><?php  echo $linha['status']; ?></td>


                            <td>
                                <?php
                                echo "<a href='CrudConsultaEditar.php?id=".$linha['id']."' title='Alterar'><i class='fa fa-pencil-square'></i></a>";
                                echo " ";
                                $id = $linha['id'];
                                echo "<a href='#' title='Excluir' onclick='confirmacaoExclusaoConsulta($id);'><i class='fa fa-trash'></i></a>";
                                ?>
                            </td>
                        </tr>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
</section>

<!-- FIM DA TABELA-->


<!-- INICIO - BARRA DO RODA PÉ -->
<section class="footer-bar">
    <div class="container"></div>
</section>
<!-- FIM - BARRA DO RODA PÉ -->

<!-- INICIO - RODA PÉ -->
<?php include_once('IncludeRodaPe.php');?>
<!-- FIM - RODA PÉ -->

<!-- ARQUIVOS SCRIPT -->
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
</body>
</html>