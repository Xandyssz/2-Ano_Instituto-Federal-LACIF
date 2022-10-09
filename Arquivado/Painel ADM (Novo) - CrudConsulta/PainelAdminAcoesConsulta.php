<?php
session_start();
include('assets/configs/config.php');

//// Verifica se existe os dados da sessão de login
//$accessType = $_SESSION["tipo_acesso"];
//if ($accessType == "Administrador")
//{
//    header("location: PainelAdminAcoesConsulta.php");
//}
//else
//{
//    header("location: lacif_home.php");
//}


// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}

if (isset($_GET['del'])) {
    $id = intval($_GET['del']);
    $adn = "delete from ifsp_lacif.consultas where id=?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
    $msg = "Consulta Removida com Sucesso";
}
?>

<!DOCTYPE html>
<html lang="en">
<!--Header-->
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
                            <li class="breadcrumb-item"><a href="#">Exames</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gerenciar Exames</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral de Exames</div>
                        </div>
                        <?php if (isset($msg)) { ?>
                            <script>
                                setTimeout(function() {
                                        swal("", "<?php echo $msg; ?>!", "");
                                    },
                                    100);
                            </script>

                        <?php } ?>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width: 20%;">ID</th>
                                    <th style="width: 20%;">Titulo</th>
                                    <th style="width: 20%;">Descrição</th>
                                    <th style="width: 20%;">Data Inicio</th>
                                    <th style="width: 20%;">Data Fim</th>
                                    <th style="width: 20%;">Convenio</th>
                                    <th style="width: 20%;">Celular</th>
                                    <th style="width: 20%;">CPF</th>
                                    <th style="width: 20%;">Tipo Sanguineo</th>
                                    <th style="width: 20%;">Tipo da Consulta</th>
                                    <th style="width: 20%;">Sexo</th>
                                    <th style="width: 20%;">Status</th>
                                    <th style="width: 20%;">Ação</th>

                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.consultas order by id";
                                $dados = mysqli_query($mysqli, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
//                                    $dataBrasil = implode('/', array_reverse(explode('-', $linha['datanasc'])));
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
                                        <td><a class="badge badge-danger" href='PainelAdminAcoesConsulta.php?del=<?php echo $linha['><i class="mdi mdi-delete"></i> Delete</a>
                                        <td><a class="badge badge-primary" href='PainelAdminEditarConsulta.php?p_id=<?php echo $linha['><i class="mdi mdi-delete"></i> Editar</a>

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
<script src="../../assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="../../assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../assets/js/app.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../../assets/lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="../../assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/lib/canvas/canvasjs.min.js"></script>
<script src="../../assets/lib/canvas/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dashboard();

    });
</script>
</body>

</html>