<?php
session_start();
include('assets/configs/config.php');

//// Verifica se existe os dados da sessão de login
//$accessType = $_SESSION["tipo_acesso"];
//if ($accessType == "Administrador")
//{
//    header("location: PainelAdminCadastrarConsulta.php");
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

?>

<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../PainelAdminAgenda.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Exame</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Adicionar Exame</li>
                        </ol>
                    </nav>
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Adicionar Detalhes do Exame<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
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
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="title">Digite o Nome Completo</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="title" name="title" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="description">Digite a Descricao</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="description" name="description" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="start">Digite a Data Inicio</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="start" name="start" type="date" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="end">Digite a Data Fim</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="end" name="end" type="date" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="convenio">Digite o Convenio</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="convenio" name="convenio" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="celular">Digite o Celular</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="celular" name="celular" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="cpf">Digite o CPF</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="cpf" name="cpf" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tiposanguineo">Tipo Sanguineo</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select class="form-control" id="tiposanguineo" name="tiposanguineo" required>
                                                <option value=""selected>Selecione o tipo sanguineo...</option>
                                                <option value="O-">O-</option>
                                                <option value="O">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A+</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="sexo">Sexo: </label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select class="form-control" id="sexo" name="sexo" required>
                                                <option value="" selected>Selecione o sexo...</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tipo">Tipo Exame: </label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select class="form-control" id="tipo" name="tipo" required>
                                                <option value="" selected>Selecione o Tipo do exame...</option>
                                                <option value="Covid19">Covid 19 </option>
                                                <option value="CheckuP">Check-Up</option>
                                                <option value="Sangue">Sangue</option>
                                                <option value="Fezes">Fezes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-primary" name="add_outappointment" type="submit">Registrar</button>
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
<?php

if (isset($_POST['add_outappointment'])){
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

//
//    $IniciodataBrasil = implode('-', array_reverse(explode('/', $start)));
//    $FimdataBrasil = implode('-', array_reverse(explode('/', $end)));    // Fazer o insert  no banco de dados

    $query = "SELECT cons.* FROM ifsp_lacif.consultas cons 
    WHERE cons.start = '$start' 
    AND cons.end = '$end' 
    AND cons.cpf = '$cpf'";

    $row = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    }

    else
    {
        $result = "INSERT INTO ifsp_lacif.consultas 
            (title, description, start, end, convenio, celular, cpf, tiposanguineo, tipo, sexo) 
            VALUES ('$title', '$description', '$start', '$end', '$convenio', '$celular', '$cpf', '$tiposanguineo', '$tipo', '$sexo')";
        var_dump($result);
        $row = mysqli_query($mysqli, $result);
        $msg = "Patient Details Add";

        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarConsulta.php">';
    }

}
?>
