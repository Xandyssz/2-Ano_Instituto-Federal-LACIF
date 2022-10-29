<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
<script src="js/funcoes.js"></script>
<!--Header-->
<title>LACIF - Visualizar Patrocinadores</title>

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
                            <li class="breadcrumb-item"><a href="#">Patrocinadores</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visualizar Patrocinador</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral dos Patrocinadores</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width:20%;">ID</th>
                                    <th style="width:20%;">Titulo</th>
                                    <th style="width:20%;">Descricao</th>
                                    <th style="width:20%;">Ativo</th>
                                    <th style="width:20%;">Imagem</th>


                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.patrocinadores order by idCarrossel";
                                $dados = mysqli_query($conn, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
                                    ?>
                                    <tr>
                                        <td><?php  echo $linha['idCarrossel']; ?></td>
                                        <td><?php  echo $linha['titulo']; ?></td>
                                        <td><?php  echo $linha['descricao']; ?></td>
                                        <td><?php  echo $linha['ativo']; ?></td>
                                        <td>
                                            <img src="img/<?php echo $linha['img_nome'];?>"
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
<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/lib/canvas/canvasjs.min.js"></script>
<script src="assets/lib/canvas/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dashboard();

    });
</script>
</body>

</html>