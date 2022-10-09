<?php
session_start();
include('assets/configs/config.php');

//// Verifica se existe os dados da sessão de login
//$accessType = $_SESSION["tipo_acesso"];
//if ($accessType == "Administrador")
//{
//    header("location: PainelAdminEditarUsuario.php");
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

$p_id = $_GET['p_id'];

if ($p_id > 0) {
    $query = "SELECT * FROM ifsp_lacif.usuarios WHERE idusuario = $p_id";
    $dados = mysqli_query($mysqli, $query);
    $linha = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarUsuario.php">';
}
?>


<!DOCTYPE html>
<html lang="en">
<script src="../../js/funcoes.js"></script>

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
          <div class="col-md-12">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header card-header-divider">Update OutPatient Details<span class="card-subtitle">Please fill required details.</span></div>
              <div class="card-body">
                <?php if (isset($msg)) { ?>
                  <script>
                    setTimeout(function() {
                        swal("Success!", "<?php echo $msg; ?>!", "success");
                      },
                      100);
                  </script>
                  <!--Trigger a pretty success alert-->

                <?php } ?>

                  <form method="POST">
                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="nome">Digite o Nome Completo</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="nome" name="nome" value="<?php  echo $linha['nome']; ?>" type="text" required>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="cpf">Digite o CPF</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="cpf" name="cpf" value="<?php  echo $linha['cpf']; ?>" type="text" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="email">Digite o Email</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="email" name="email" value="<?php  echo $linha['email']; ?>" type="text" required>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="senha">Digite a Senha</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="senha" name="senha" value="<?php  echo $linha['senha']; ?>" type="password" required>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="celular">Digite o Celular</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="celular" name="celular" value="<?php  echo $linha['celular']; ?>" type="text" required>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="endereco">Digite o Endereco</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="endereco" name="endereco" value="<?php  echo $linha['endereco']; ?>" type="text" required>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="datanasc">Data de Nascimento</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <input class="form-control" id="datanasc" name="datanasc" value="<?php  echo $linha['datanasc']; ?>" type="date" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tipo_acesso">Nivel de Acesso</label>
                          <div class="col-12 col-sm-8 col-lg-6">
                              <select class="form-control" id="tipo_acesso" name="tipo_acesso" <?php  echo $linha['tipo_acesso']; ?> required>

                                  <?php
                                  if ($linha['tipo_acesso'] == "Paciente") {
                                      ?>
                                      <option value="Paciente"selected>Paciente</option>
                                      <option value="Laboratorista">Laboratorista</option>
                                      <option value="Administrador">Administrador</option>


                                      <?php
                                  }
                                  elseif ($linha['tipo_acesso'] == "Laboratorista") {
                                      ?>
                                      <option value="Paciente">Paciente</option>
                                      <option value="Laboratorista"selected>Laboratorista</option>
                                      <option value="Administrador">Administrador</option>

                                      <?php
                                  } elseif ($linha['tipo_acesso'] == "Administrador") {
                                      ?>
                                      <option value="Paciente">Paciente</option>
                                      <option value="Laboratorista">Laboratorista</option>
                                      <option value="Administrador"selected>Administrador</option>
                                      <?php
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>

                    <div class="col-sm-6">
                      <p class="text-right">
                        <button class="btn btn-space btn-primary" name="update_outpatient" type="submit">Upadate OutPatient</button>
                        <button class="btn btn-space btn-secondary">Cancel</button>
                      </p>
                    </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script>
      $("#celular").mask("(99) 99999-9999");
      $("#cpf").mask("999.999.999-99");
  </script>
  <script>
      $(#celular).mask("(99) 99999-9999");
      $(#cpf).mask("999.999.999-99");
  </script>

  </div>
  <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
  <script type="text/javascript">
    CKEDITOR.replace('editor')
    CKEDITOR.replace('editor1')
  </script>
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

<?php
if (isset($_POST['update_outpatient']))
{
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$datanasc = $_POST['datanasc'];
    $tipo_acesso = $_POST['tipo_acesso'];

//sql to inset the values to the database
$result = "update ifsp_lacif.usuarios set nome = '$nome', cpf='$cpf', email='$email',
senha='$senha', celular='$celular', endereco='$endereco', datanasc='$datanasc', tipo_acesso='$tipo_acesso' where idusuario= $p_id";
$row = mysqli_query($mysqli, $result);
$msg = "Patient Details Add";

echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesUsuario.php">';

}
?>




</html>