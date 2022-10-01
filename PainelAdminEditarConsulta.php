<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
$p_id = $_GET['p_id'];

if ($p_id > 0) {
    $query = "SELECT * FROM ifsp_lacif.consultas WHERE id = $p_id";
    $dados = mysqli_query($mysqli, $query);
    $linha = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarConsulta.php">';
}
?>


<!DOCTYPE html>
<html lang="en">
<script src="js/funcoes.js"></script>

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
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="title">Digite o Nome Completo</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="title" name="title" value="<?php  echo $linha['title']; ?>"  type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="description">Digite a Descricao</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="description" name="description" value="<?php  echo $linha['description']; ?>" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="start">Digite a Data Inicio</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="start" name="start" value="<?php  echo $linha['start']; ?>" type="date" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="end">Digite a Data Fim</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="end" name="end" value="<?php  echo $linha['end']; ?>" type="date" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="convenio">Digite o Convenio</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="convenio" name="convenio" value="<?php  echo $linha['convenio']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="celular">Digite o Celular</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="celular" name="celular" value="<?php  echo $linha['celular']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="cpf">Digite o CPF</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="cpf" name="cpf" value="<?php  echo $linha['cpf']; ?>" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tiposanguineo">Tipo Sanguineo</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="tiposanguineo" name="tiposanguineo" value="<?php  echo $linha['tiposanguineo']; ?>" required>
                                            <?php
                                            if ($linha['tiposanguineo'] == "O-") {
                                                ?>
                                                <option value="O-"selected>O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>
                                                <?php
                                            }
                                            elseif ($linha['tiposanguineo'] == "O") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O"selected>O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>
                                                <?php
                                            } elseif ($linha['tiposanguineo'] == "AB-") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-"selected>AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>
                                                <?php
                                            } elseif ($linha['tiposanguineo'] == "AB") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB"selected>AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>

                                                <?php
                                            } elseif ($linha['tiposanguineo'] == "B-") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-"selected>B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>

                                                <?php
                                            } elseif ($linha['tiposanguineo'] == "B") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B"selected>B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>

                                                <?php
                                            } elseif ($linha['tiposanguineo'] == "A-") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-"selected>A-</option>
                                                <option value="A">A+</option>

                                                <?php
                                            } elseif ($linha['tiposanguineo'] == "A") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A"selected>A+</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tipo">Tipo Exame: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="tipo" name="tipo" value="<?php  echo $linha['tipo']; ?>" required>
                                            <?php
                                            if ($linha['tipo'] == "Covid19") {
                                                ?>
                                                <option value="Covid19"selected>Covid 19 </option>
                                                <option value="CheckuP">Check-Up</option>
                                                <option value="Sangue">Sangue</option>
                                                <option value="Fezes">Fezes</option>
                                                <?php
                                            }
                                            elseif ($linha['tipo'] == "CheckuP") {
                                                ?>
                                                <option value="Covid19">Covid 19 </option>
                                                <option value="CheckuP"selected>Check-Up</option>
                                                <option value="Sangue">Sangue</option>
                                                <option value="Fezes">Fezes</option>
                                                <?php
                                            } elseif ($linha['tipo'] == "Sangue") {
                                                ?>
                                                <option value="Covid19">Covid 19 </option>
                                                <option value="CheckuP">Check-Up</option>
                                                <option value="Sangue"selected>Sangue</option>
                                                <option value="Fezes">Fezes</option>
                                                <?php
                                            } elseif ($linha['tipo'] == "Fezes") {
                                                ?>
                                                <option value="Covid19">Covid 19 </option>
                                                <option value="CheckuP">Check-Up</option>
                                                <option value="Sangue">Sangue</option>
                                                <option value="Fezes"selected>Fezes</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="sexo">Sexo: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="sexo" name="sexo" value="<?php  echo $linha['sexo']; ?>" required>
                                            <?php
                                            if ($linha['sexo'] == "Masculino") {
                                                ?>
                                                <option value="Masculino"selected>Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <?php
                                            }
                                            elseif ($linha['sexo'] == "Feminino") {
                                                ?>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino"selected>Feminino</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="status">Tipo Exame: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="status" name="status" value="<?php  echo $linha['status']; ?>" required>
                                            <?php
                                            if ($linha['status'] == "Pendente") {
                                                ?>
                                                <option value="Pendente"selected>Pendente</option>
                                                <option value="Analise">Sobre Análise</option>
                                                <option value="Finalizado">Finalizado</option>
                                                <?php
                                            }
                                            elseif ($linha['status'] == "Analise") {
                                                ?>
                                                <option value="Pendente">Pendente</option>
                                                <option value="Analise"selected>Sobre Análise</option>
                                                <option value="Finalizado">Finalizado</option>
                                                <?php
                                            } elseif ($linha['status'] == "Finalizado") {
                                                ?>
                                                <option value="Pendente">Pendente</option>
                                                <option value="Analise">Sobre Análise</option>
                                                <option value="Finalizado"selected>Finalizado</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <p class="text-right">
                                        <button class="btn btn-space btn-primary" name="update_outappointment" type="submit">Registrar</button>
                                        <button class="btn btn-space btn-secondary">Cancelar</button>
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

<?php
if (isset($_POST['update_outappointment']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $convenio = $_POST['convenio'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $tiposanguineo = $_POST['tiposanguineo'];
    $tipo = $_POST['tipo'];
    $sexo = $_POST['sexo'];
    $status = $_POST['status'];

//sql to inset the values to the database
    $result = "update ifsp_lacif.consultas set title = '$title', description='$description', start='$start', end='$end', convenio='$convenio', celular='$celular', cpf='$cpf', tiposanguineo='$tiposanguineo', tipo='$tipo', sexo='$sexo', status='$status' where id= $p_id";
    $row = mysqli_query($mysqli, $result);
    $msg = "Patient Details Add";

    var_dump($result);
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesConsulta.php">';

}
?>




</html>