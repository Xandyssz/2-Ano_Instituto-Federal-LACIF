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
<title>LACIF - Cadastrar Consultas</title>

<?php include('includes/header.php'); ?>
<!--horario Header-->

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
                            <li class="breadcrumb-item"><a href="PainelAdminAghorarioa.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Exame</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Adicionar Exame</li>
                        </ol>
                    </nav>
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Adicionar Detalhes do Exame<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
                        <div class="card-body">
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
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="horario">Selecione o Horario</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
<!--                                            <input class="form-control" id="horario" name="horario" type="time" min="07:00" max="18:00" required>-->
                                            <select class="form-control" id="horario" name="horario" required>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15">08:15</option>
                                                <option value="08:30">08:30</option>
                                                <option value="08:45">08:45</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:15">09:15</option>
                                                <option value="09:30">09:30</option>
                                                <option value="09:45">09:45</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:15">10:15</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:45">10:45</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:15">11:15</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:45">11:45</option>
                                                <option value="11:45">14:00</option>
                                                <option value="14:15">14:15</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:45">14:45</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:15">15:15</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:45">15:45</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:15">16:15</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tipo">Convênio: </label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select class="form-control" name="convenio" id="convenio" class="box" required>
                                                <option value="" selected>Selecione o Convênio...</option>
                                                <?php
                                                $query = "SELECT * FROM ifsp_lacif.convenios ORDER BY idConvenio";
                                                $resultado = mysqli_query($conn, $query);
                                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                                    ?>
                                                    <option value="<?php echo $linha['nomeConvenio'];?>"><?php echo $linha['nomeConvenio'];?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="porcentagem">Desconto em %</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="porcentagem" name="porcentagem" type="text" disabled>
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
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tipo">Tipo Exame: </label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select class="form-control" name="tipo" id="tipo" class="box" required>
                                                <option value="" selected>Selecione o Tipo de Exame...</option>
                                                <?php
                                                $query = "SELECT * FROM ifsp_lacif.exames ORDER BY idTipoExame";
                                                $resultado = mysqli_query($conn, $query);
                                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                                    ?>
                                                    <option value="<?php echo $linha['nomeExame'];?>"><?php echo $linha['nomeExame'];?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="valor">Valor do Exame</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="valor" name="valor" type="text" disabled>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <input type="submit" id="Registrar" name="Registrar" class="btn btn-primary pull-right" value="Registrar">
                                            <input type="button" name="listar" class="btn btn-primary pull-right" value="Cancelar" onclick="window.location.href='PainelAdminAcoesConsulta.php'">
                                            <br>
                                    </div>
                        </div>
                        <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- FORMATAR - IMPOSSIBILITAR O USUARIO DE SELECIONAR DATA ANTIGA (DATA) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;

        $('#start').attr('min', maxDate);
        $('#horario').attr('min', maxDate);

    });
</script>


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

<!-- JANELA MODAL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<div id="msgInsert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-center">
                <h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Consulta Cadastrada com Sucesso!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div id="msgErro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-center">
                <h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Ocorreu um erro!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div id="msgconflito" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-center">
                <h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Ocorreu um erro, data ou horario já ocupado. Tente Remarcar!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {


        $("#convenio").change(()=>{
            let conv = $("#convenio").val();
            $("#porcentagem").val("Requisitando dados...");
            $.get("getPercentByConvenio.php?convenio="+conv, function(data, status){
                let dados = JSON.parse(data);

                $("#porcentagem").val(dados[0].porcentagem)
            });
        })
        $("#tipo").change(()=>{
            let conv = $("#tipo").val();

            $.get("getValorByExame.php?exame="+conv, function(data, status){
                let dados = JSON.parse(data);

                $("#valor").val(dados[0].valor)
            });
        })


    });
</script>
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


        alert("asd");


    });
</script>

</body>

</html>
<?php

if (isset($_POST['Registrar'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $horario = $_POST['horario'];
    $convenio = $_POST['convenio'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $tipo = $_POST['tipo'];

//
//    $IniciodataBrasil = implode('-', array_reverse(explode('/', $start)));
//    $FimdataBrasil = implode('-', array_reverse(explode('/', $horario)));    // Fazer o insert  no banco de dados

    $query = "SELECT cons.* FROM ifsp_lacif.consultas cons 
    WHERE cons.start = '$start' 
    AND cons.horario = '$horario'";

    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script>$(document).ready(function() { $('#msgconflito').modal(); })</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminCadastrarConsulta.php">';

    }

    else
    {
        $result = "INSERT INTO ifsp_lacif.consultas 
            (title, description, start, horario, convenio, celular, cpf, tipo) 
            VALUES ('$title', '$description', '$start', '$horario', '$convenio', '$celular', '$cpf', '$tipo')";
        $row = mysqli_query($conn, $result);

        echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
//        var_dump($result);
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminListarConsulta.php">';
    }

}
?>
