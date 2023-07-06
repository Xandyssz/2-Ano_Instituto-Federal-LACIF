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
$id = $_GET['id'];

if ($id > 0) {
    $query = "SELECT * FROM lacifs93_ifsp_lacif.usuarios WHERE idusuario = $id";
    $dados = mysqli_query($conn, $query);
    $linhaUnica = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarUsuario.php">';
}
?>


<!DOCTYPE html>
<html lang="en">
<script src="js/funcoes.js"></script>

<!--Header-->
<title>LACIF - Editar Usuario</title>

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

                            <form method="POST">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="nome">Digite o Nome Completo</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="nome" name="nome" value="<?php  echo $linhaUnica['nome']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="cpf">Digite o CPF</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="cpf" name="cpf" value="<?php  echo $linhaUnica['cpf']; ?>" type="text" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="email">Digite o Email</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="email" name="email" value="<?php  echo $linhaUnica['email']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="senha">Digite a Senha</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="senha" name="senha" value="<?php  echo $linhaUnica['senha']; ?>" type="password">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="celular">Digite o Celular</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="celular" name="celular" value="<?php  echo $linhaUnica['celular']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="endereco">Digite o Endereco</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="endereco" name="endereco" value="<?php  echo $linhaUnica['endereco']; ?>" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tiposanguineo">Tipo Sanguineo</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="tiposanguineo" name="tiposanguineo" value="<?php  echo $linhaUnica['tiposanguineo']; ?>" required>
                                            <?php
                                            if ($linhaUnica['tiposanguineo'] == "O-") {
                                                ?>
                                                <option value="O-"selected>O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <?php
                                            }
                                            elseif ($linhaUnica['tiposanguineo'] == "O+") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+"selected>O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <?php
                                            } elseif ($linhaUnica['tiposanguineo'] == "AB-") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-"selected>AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <?php
                                            } elseif ($linhaUnica['tiposanguineo'] == "AB+") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+"selected>AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>

                                                <?php
                                            } elseif ($linhaUnica['tiposanguineo'] == "B-") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-"selected>B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>

                                                <?php
                                            } elseif ($linhaUnica['tiposanguineo'] == "B+") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+"selected>B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>

                                                <?php
                                            } elseif ($linhaUnica['tiposanguineo'] == "A-") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-"selected>A-</option>
                                                <option value="A+">A+</option>

                                                <?php
                                            } elseif ($linhaUnica['tiposanguineo'] == "A+") {
                                                ?>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+"selected>A+</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="sexo">Sexo: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="sexo" name="sexo" value="<?php  echo $linhaUnica['sexo']; ?>" required>
                                            <?php
                                            if ($linhaUnica['sexo'] == "Masculino") {
                                                ?>
                                                <option value="Masculino"selected>Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <?php
                                            }
                                            elseif ($linhaUnica['sexo'] == "Feminino") {
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
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="datanasc">Data de Nascimento</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="datanasc" name="datanasc" value="<?php  echo $linhaUnica['datanasc']; ?>" type="date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="tipo_acesso">Nivel de Acesso</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="tipo_acesso" name="tipo_acesso" <?php  echo $linhaUnica['tipo_acesso']; ?> required>

                                            <?php
                                            if ($linhaUnica['tipo_acesso'] == "Paciente") {
                                                ?>
                                                <option value="Paciente"selected>Paciente</option>
                                                <option value="Laboratorista">Laboratorista</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Recepcionista">Recepcionista</option>

                                                <?php
                                            }
                                            elseif ($linhaUnica['tipo_acesso'] == "Laboratorista") {
                                                ?>
                                                <option value="Paciente">Paciente</option>
                                                <option value="Laboratorista"selected>Laboratorista</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Recepcionista">Recepcionista</option>


                                                <?php
                                            } elseif ($linhaUnica['tipo_acesso'] == "Administrador") {
                                                ?>
                                                <option value="Paciente">Paciente</option>
                                                <option value="Laboratorista">Laboratorista</option>
                                                <option value="Administrador"selected>Administrador</option>
                                                <option value="Recepcionista">Recepcionista</option>


                                                <?php
                                            } elseif ($linhaUnica['tipo_acesso'] == "Recepcionista") {
                                                ?>
                                                <option value="Paciente">Paciente</option>
                                                <option value="Laboratorista">Laboratorista</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Recepcionista"selected>Recepcionista</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <p class="text-right">
                                        <input type="submit" id="Atualizar" name="Atualizar" class="btn btn-primary pull-right" value="Atualizar">
                                        <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='PainelAdminAcoesUsuario.php'" value="Voltar">

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

        $('#datanasc').attr('max', maxDate);

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


</div>
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
                Usuario Atualizado com Sucesso!
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
if (isset($_POST['Atualizar']))
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $tiposanguineo = $_POST['tiposanguineo'];
    $sexo = $_POST['sexo'];
    $datanasc = $_POST['datanasc'];
    $tipo_acesso = $_POST['tipo_acesso'];

//sql to inset the values to the database
    $result = "update lacifs93_ifsp_lacif.usuarios 
set nome = '$nome', 
    cpf='$cpf', 
    email='$email',
    senha='$senhaCript', 
    celular='$celular', 
    endereco='$endereco',
    tiposanguineo='$tiposanguineo',
    sexo='$sexo',
    datanasc='$datanasc', 
    tipo_acesso='$tipo_acesso' where idusuario= $id";
    $row = mysqli_query($conn, $result);

    echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesUsuario.php">';

}
?>




</html>