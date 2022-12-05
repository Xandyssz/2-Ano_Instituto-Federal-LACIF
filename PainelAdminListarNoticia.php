<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}else if($_SESSION['tipo_acesso'] != "Administrador")
{
    header("location: lacif_home.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
<script src="js/funcoes.js"></script>
<!--Header-->
<title>LACIF - Visualizar Noticia</title>

<?php include('includes/header.php'); ?>
<!--End Header-->

<body>
<div class="be-wrapper be-fixed-sidebar">
    <!--Navigation bar-->
    <?php include("includes/navbar.php"); ?>
    <!--Navigation-->

    <!--Sidebar-->
    <?php include("includes/sidebar.php"); ?>
    <!--Sidebar-->
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="PainelAdminAgenda.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Noticia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visualizar Noticias</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral de Noticias</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width:20%;">ID</th>
                                    <th style="width:20%;">Titulo</th>
                                    <th style="width:20%;">Descricao</th>
                                    <th style="width:20%;">Data Noticia</th>
                                    <th style="width:20%;">Imagem</th>


                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.noticias order by idNoticia";
                                $dados = mysqli_query($conn, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
                                    $dataBrasil = implode('/', array_reverse(explode('-', $linha['dataNoticia'])));

                                    ?>
                                    <tr>
                                        <td><?php  echo $linha['idNoticia']; ?></td>
                                        <td><?php  echo $linha['titulo']; ?></td>
                                        <td><?php  echo $linha['descricao']; ?></td>
                                        <td><?php  echo $dataBrasil; ?></td>
                                        <td>
                                            <img src="img/<?php echo $linha['img_user'];?>"
                                                 alt="Imagem" width="120px" heigth="120px">
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="lib/canvas/canvasjs.min.js"></script>
<script src="lib/canvas/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dashboard();

    });
</script>
</body>

</html>