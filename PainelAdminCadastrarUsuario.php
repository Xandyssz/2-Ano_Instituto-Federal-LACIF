<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="PainelAdminAgenda.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastrar Usuario</li>
                        </ol>
                    </nav>
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Adicionar Detalhes do Usuario<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
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

                            <div class="card-body">
                                <?php if (isset($erro)) { ?>
                                    <script>
                                        setTimeout(function() {
                                                swal("Unsuccessful!", "<?php echo $erro; ?>!", "Unsuccessful");
                                            },
                                            100);
                                    </script>
                                    <!--Trigger a pretty success alert-->

                                <?php } ?>
                                <form method="POST">
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="nome">Digite o Nome Completo</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="nome" name="nome" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="cpf">Digite o CPF</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="cpf" name="cpf" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="email">Digite o Email</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="email" name="email" type="email" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="senha">Digite a Senha</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="senha" name="senha" type="password" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="celular">Digite o Celular</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="celular" name="celular" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="endereco">Digite o Endereco</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="endereco" name="endereco" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="datanasc">Data de Nascimento</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="datanasc" name="datanasc" type="date" required>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-primary" name="add_outpatient" type="submit">Registrar</button>
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
<?php

if (isset($_POST['add_outpatient'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $datanasc = $_POST['datanasc'];


    $dataBrasil = implode('-', array_reverse(explode('/', $datanasc)));
    // Fazer o insert  no banco de dados

    $query = "SELECT * FROM ifsp_lacif.usuarios users 
    WHERE users.cpf = '$cpf'";


    $row = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    }

    else
    {
        $result = "INSERT INTO ifsp_lacif.usuarios 
        (nome, cpf, email, senha, celular, endereco, datanasc) 
        VALUES ('$nome', '$cpf', '$email', '$senhaCript', '$celular', '$endereco', '$dataBrasil')";
        $row = mysqli_query($mysqli, $result);
        $msg = "Patient Details Add";

        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarUsuario.php">';
    }

}
?>
