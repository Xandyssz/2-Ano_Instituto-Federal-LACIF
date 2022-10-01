<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');

if (isset($_GET['del'])) {
  $id = intval($_GET['del']);
  $adn = "delete from ifsp_lacif.usuarios where idusuario=?";
  $stmt = $mysqli->prepare($adn);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $stmt->close();
  $msg = "Paciente Removido com Sucesso";
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
                <li class="breadcrumb-item"><a href="PainelAdminAgenda.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Usuarios</li>
              </ol>
            </nav>
            <div class="card card-table">
              <div class="card-header">
                <div class="title">Registro Geral dos Usuarios</div>
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
                        <th style="width:20%;">ID</th>
                        <th style="width:20%;">Nome</th>
                        <th style="width:20%;">CPF</th>
                        <th style="width:20%;">Email</th>
                        <th style="width:20%;">Senha</th>
                        <th style="width:20%;">Celular</th>
                        <th style="width:20%;">Endereço</th>
                        <th style="width:20%;">Data Nascimento</th>
                        <th style="width:20%;">Nivel Acesso</th>
                        <th style="width:20%;">Ação</th>

                    </tr>
                  </thead>
                    <?php
                    $query = "SELECT * FROM ifsp_lacif.usuarios order by idusuario";
                    $dados = mysqli_query($mysqli, $query ); // comando transação bd

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
                            <td><?php  echo $dataBrasil; ?></td>
                            <td><?php  echo $linha['tipo_acesso'];?></td>
                            <td><a class="badge badge-danger" href='PainelAdminAcoesUsuario.php?del=<?php echo $linha['idusuario']?>'><i class="mdi mdi-delete"></i> Delete</a>
                            <td><a class="badge badge-primary" href='PainelAdminEditarUsuario.php?p_id=<?php echo $linha['idusuario']?>'><i class="mdi mdi-delete"></i> Editar</a>

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