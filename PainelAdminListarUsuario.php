<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}else if($_SESSION['tipo_acesso'] != "Administrador" && $_SESSION['tipo_acesso'] != "Recepcionista")
{
    header("location: lacif_home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
<script src="js/funcoes.js"></script>
<!--Header-->
<title>LACIF - Visualizar Usuarios</title>

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
                            <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visualizar Usuarios</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral dos Usuarios</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width:20%;">ID</th>
                                    <th style="width:20%;">Nome</th>
                                    <th style="width:20%;">CPF</th>
                                    <th style="width:20%;">Email</th>
                                    <th style="width:20%;">Senha</th>
                                    <th style="width:20%;">Celular</th>
                                    <th style="width:20%;">Endereço</th>
                                    <th style="width:20%;">Tipo Sanguineo</th>
                                    <th style="width:20%;">Sexo</th>
                                    <th style="width:20%;">Data Nascimento</th>
                                    <th style="width:20%;">Nivel Acesso</th>


                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.usuarios order by idusuario";
                                $dados = mysqli_query($conn, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
                                    $dataBrasil = implode('/', array_reverse(explode('-', $linha['datanasc'])));

                                    ?>
                                    <tr>
                                        <td><?php  echo $linha['idusuario']; ?></td>
                                        <td><?php  echo $linha['nome']; ?></td>
                                        <td><?php  echo $linha['cpf']; ?></td>
                                        <td><?php  echo $linha['email']; ?></td>
                                        <td><?php  echo $linha['senha']; ?></td>
                                        <td><?php  echo $linha['celular']; ?></td>
                                        <td><?php  echo $linha['endereco']; ?></td>
                                        <td><?php  echo $linha['tiposanguineo']; ?></td>
                                        <td><?php  echo $linha['sexo']; ?></td>
                                        <td><?php  echo $dataBrasil; ?></td>
                                        <td><?php  echo $linha['tipo_acesso'];?></td>
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