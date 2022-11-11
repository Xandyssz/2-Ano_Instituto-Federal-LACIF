<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");

}else if($_SESSION['tipo_acesso'] != "Administrador" && $_SESSION['tipo_acesso'] != "Laboratorista")
{
    header("location: lacif_home.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
<script src="js/funcoes.js"></script>
<!--Header-->
<title>LACIF - Visualizar Consultas</title>

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
                            <li class="breadcrumb-item"><a href="../../PainelAdminAgenda.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Exame</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visualizar Exames</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral de Exames</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width: 20%;">ID</th>
                                    <th style="width: 20%;">Nome</th>
                                    <th style="width: 20%;">Descrição</th>
                                    <th style="width: 20%;">Data Inicio</th>
                                    <th style="width: 20%;">Horario</th>
                                    <th style="width: 20%;">Convenio</th>
                                    <th style="width: 20%;">Celular</th>
                                    <th style="width: 20%;">CPF</th>
                                    <th style="width: 20%;">Tipo da Consulta</th>
                                    <th style="width: 20%;">Resultado do Exame</th>
                                    <th style="width: 20%;">Status</th>
                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.consultas order by id";
                                $dados = mysqli_query($conn, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
                                    $dataBrasil = implode('/', array_reverse(explode('-', $linha['start'])));

                                    ?>
                                    <tr>
                                        <td><?php  echo $linha['id']; ?></td>
                                        <td><?php  echo $linha['title']; ?></td>
                                        <td><?php  echo $linha['description']; ?></td>
                                        <td><?php  echo $dataBrasil; ?></td>
                                        <td><?php  echo $linha['horario']; ?></td>
                                        <td><?php  echo $linha['convenio']; ?></td>
                                        <td><?php  echo $linha['celular']; ?></td>
                                        <td><?php  echo $linha['cpf']; ?></td>
                                        <td><?php  echo $linha['tipo']; ?></td>
                                        <td><?php  echo $linha['resultado']; ?></td>
                                        <td><?php  echo $linha['status']; ?></td>
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