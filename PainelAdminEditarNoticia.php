<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
$p_id = $_GET['p_id'];

if ($p_id > 0) {
    $query = "SELECT * FROM ifsp_lacif.noticias WHERE idNoticia = $p_id";
    $dados = mysqli_query($mysqli, $query);
    $linha = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarUsuario.php">';
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
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="titulo">Digite o Titulo da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="titulo" name="titulo" type="text" value="<?php  echo $linha['titulo']; ?>" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite a Descricao da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="descricao" name="descricao" type="text" value="<?php  echo $linha['descricao']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="dataNoticia">Data da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="dataNoticia" name="dataNoticia" type="date" value="<?php  echo $linha['dataNoticia']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="upload-button">Imagem da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="upload-button" name="upload-button" type="file" required>
                                    </div>
                                </div>

                                <div class="form-group col-sm-12" style="text-align:center;">
                                    <br>
                                    <img name="chosen-image" id="chosen-image" width="600px" height="400px">
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