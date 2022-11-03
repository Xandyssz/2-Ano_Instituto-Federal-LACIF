<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}else if($_SESSION['tipo_acesso'] != "Administrador")
{
    header("location: lacif_home.php");
}

$id = $_GET['id'];

if ($id > 0) {
    $query = "SELECT * FROM ifsp_lacif.consultas WHERE id = $id";
    $dados = mysqli_query($conn, $query);
    $linhaUnica = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarConsulta.php">';
}
?>


<!DOCTYPE html>
<html lang="en">
<script src="js/funcoes.js"></script>

<!--Header-->
<title>LACIF - Editar Consulta</title>

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
                        <div class="card-header card-header-divider">Atualizar dados do Usuario<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="title">Digite o Nome Completo</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="title" name="title" value="<?php  echo $linhaUnica['title']; ?>"  type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="description">Digite a Descricao</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="description" name="description" value="<?php  echo $linhaUnica['description']; ?>" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="start">Digite a Data Inicio</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="start" name="start" value="<?php  echo $linhaUnica['start']; ?>" type="date" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="end">Digite a Data Fim</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="end" name="end" value="<?php  echo $linhaUnica['end']; ?>" type="date" required>
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
                                                if ($linha['idConvenio'] == $linha['idConvenio']) { ?>
                                                    <option value="<?php echo $linha['idConvenio']; ?>" selected><?php echo $linha['nomeConvenio'];?></option>
                                                <?php   } else { ?>
                                                    <option value="<?php echo $linha['idConvenio']; ?>"><?php echo $linha['nomeConvenio'];?></option>
                                                <?php   }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="celular">Digite o Celular</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="celular" name="celular" value="<?php  echo $linhaUnica['celular']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="cpf">Digite o CPF</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="cpf" name="cpf" value="<?php  echo $linhaUnica['cpf']; ?>" type="text" required>
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
                                                if ($linha['idTipoExame'] == $linha['idTipoExame']) { ?>
                                                    <option value="<?php echo $linha['idTipoExame']; ?>" selected><?php echo $linha['nomeExame'];?></option>
                                                <?php   } else { ?>
                                                    <option value="<?php echo $linha['idTipoExame']; ?>"><?php echo $linha['nomeExame'];?></option>
                                                <?php   }
                                            }
                                            ?>
                                        </select>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="status">Status do Exame: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="status" name="status" value="<?php  echo $linhaUnica['status']; ?>" required>
                                            <?php
                                            if ($linhaUnica['status'] == "Pendente") {
                                                ?>
                                                <option value="Pendente"selected>Pendente</option>
                                                <option value="Finalizado">Finalizado</option>
                                                <?php
                                            }
                                            elseif ($linhaUnica['status'] == "Finalizado") {
                                                ?>
                                                <option value="Pendente">Pendente</option>
                                                <option value="Finalizado"selected>Finalizado</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Upload do Resultado do Exame</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" type="file" id="arquivo" name="arquivo">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <p class="text-right">
                                        <button class="btn btn-space btn-primary" name="update_outappointment" type="submit">Registrar</button>
                                        <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='PainelAdminAcoesConsulta.php'" value="Voltar">
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
        $('#end').attr('min', maxDate);

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
<script src="js/janelasModais.js"></script>
<script src="assets/lib/canvas/jquery.canvasjs.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dashboard();

    });
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
                Registro cadastrado com sucesso!
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

</body>

<?php
if (isset($_POST['update_outappointment']))
{
    if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $titulo = $_FILES['arquivo']['name'];//images.png
        $extensao = strrchr($titulo, '.');//png
        $extensao = strtolower($extensao);
        if (strstr('.pdf', $extensao)) {
            $novotitulo = md5(microtime()) . '.' . $extensao;
            $destino = 'img/' . $novotitulo;
            if (@move_uploaded_file($arquivo_tmp, $destino)) {
                //echo "Arquivo salvo com sucesso";
            } else {
                echo "Erro ao salvar o arquivo";
            }
        } else {
            echo "Formato de arquivo invalido!";
        }
    }


    $title = $_POST['title'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $convenio = $_POST['convenio'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $tipo = $_POST['tipo'];
    $resultado = $novotitulo;
    $status = $_POST['status'];

//sql to inset the values to the database
    $result = "update ifsp_lacif.consultas 
set title = '$title', 
    description='$description', 
    start='$start', 
    end='$end', 
    convenio='$convenio', 
    celular='$celular', 
    cpf='$cpf',
    tipo='$tipo',
    resultado='$resultado',
    status='$status' WHERE id = $id";

    $row = mysqli_query($conn, $result);

    echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesConsulta.php">';

}
?>




</html>