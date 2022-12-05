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
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="horario">Selecione o Horario</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" id="horario" name="horario" value="<?php  echo $linhaUnica['horario']; ?>" required>
                                            <?php
                                            if ($linhaUnica['horario'] == "07:00:00") {
                                                ?>
                                                <option value="07:00"selected>07:00</option>
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
                                                <!--                                                --><?php
                                            } elseif ($linhaUnica['horario'] == "07:15:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15"selected>07:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "07:30:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30"selected>07:30</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "07:45:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45"selected>07:45</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "08:00:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00"selected>08:00</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "08:15:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15"selected>08:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "08:30:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15">08:15</option>
                                                <option value="08:30"selected>08:30</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "08:45:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15">08:15</option>
                                                <option value="08:30">08:30</option>
                                                <option value="08:45"selected>08:45</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "09:00:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15">08:15</option>
                                                <option value="08:30">08:30</option>
                                                <option value="08:45">08:45</option>
                                                <option value="09:00"selected>09:00</option>
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
                                                <!--                                                --><?php
                                            } elseif ($linhaUnica['horario'] == "09:15:00") {
                                                ?>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15">08:15</option>
                                                <option value="08:30">08:30</option>
                                                <option value="08:45">08:45</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:15"selected>09:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "09:30:00") {
                                                ?>
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
                                                <option value="09:30"selected>09:30</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "09:45:00") {
                                                ?>
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
                                                <option value="09:45"selected>09:45</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "10:00:00") {
                                                ?>
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
                                                <option value="10:00"selected>10:00</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "10:15:00") {
                                                ?>
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
                                                <option value="10:15"selected>10:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "10:30:00") {
                                                ?>
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
                                                <option value="10:30"selected>10:30</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "10:45:00") {
                                                ?>
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
                                                <option value="10:45"selected>10:45</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "11:00:00") {
                                                ?>
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
                                                <option value="11:00"selected>11:00</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "11:15:00") {
                                                ?>
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
                                                <option value="11:15"selected>11:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "11:30:00") {
                                                ?>
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
                                                <option value="11:30"selected>11:30</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "11:45:00") {
                                                ?>
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
                                                <option value="11:45"selected>11:45</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "14:00:00") {
                                                ?>
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
                                                <option value="11:45"selected>14:00</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "14:15:00") {
                                                ?>
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
                                                <option value="14:15"selected>14:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "14:30:00") {
                                                ?>
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
                                                <option value="14:30"selected>14:30</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "14:45:00") {
                                                ?>
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
                                                <option value="14:45"selected>14:45</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "15:00:00") {
                                                ?>
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
                                                <option value="15:00"selected>15:00</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "15:15:00") {
                                                ?>
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
                                                <option value="15:15"selected>15:15</option>
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
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "15:30:00") {
                                                ?>
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
                                                <option value="15:30"selected>15:30</option>
                                                <option value="15:45">15:45</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:15">16:15</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "15:45:00") {
                                                ?>
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
                                                <option value="15:45"selected>15:45</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:15">16:15</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "16:00:00") {
                                                ?>
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
                                                <option value="16:00"selected>16:00</option>
                                                <option value="16:15">16:15</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "16:15:00") {
                                                ?>
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
                                                <option value="16:15"selected>16:15</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "16:30:00") {
                                                ?>
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
                                                <option value="16:30"selected>16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "16:45:00") {
                                                ?>
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
                                                <option value="16:45"selected>16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "17:00:00") {
                                                ?>
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
                                                <option value="17:00"selected>17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "17:15:00") {
                                                ?>
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
                                                <option value="17:15"selected>17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "17:30:00") {
                                                ?>
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
                                                <option value="17:30"selected>17:30</option>
                                                <option value="17:45">17:45</option>
                                                <?php
                                            } elseif ($linhaUnica['horario'] == "17:45:00") {
                                                ?>
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
                                                <option value="17:45"selected>17:45</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="idConvenio">Convênio: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" name="idConvenio" id="idConvenio" class="box" required>
                                            <option value="<?php echo $linhaUnica['idConvenio']?>" selected><?php
                                                $select = "SELECT * from ifsp_lacif.convenios where idConvenio = ".$linhaUnica['idConvenio'];

                                                $q = mysqli_query($conn,$select);

                                                $row = mysqli_fetch_assoc($q);

                                                echo $row['nomeConvenio'];
                                                ?>
                                            </option>
                                            <?php
                                            $query = "SELECT * FROM ifsp_lacif.convenios ORDER BY idConvenio ASC";
                                            $resultado = mysqli_query($conn, $query);
                                            while ($linha = mysqli_fetch_assoc($resultado)) {

                                                if ($linha['idConvenio'] != $linhaUnica['idConvenio']){
                                                    ?>
                                                    <option value="<?php echo $linha['idConvenio'];?>">
                                                        <?php echo $linha['nomeConvenio'];?>
                                                    </option>
                                                    <?php
                                                }}
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
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="idTipoExame">Tipo Exame: </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" name="idTipoExame" id="idTipoExame" class="box" required>
                                            <option value="<?php echo $linhaUnica['idTipoExame']?>" selected><?php
                                                $select = "SELECT * from ifsp_lacif.exames where idTipoExame = ".$linhaUnica['idTipoExame'];

                                                $q = mysqli_query($conn,$select);

                                                $row = mysqli_fetch_assoc($q);

                                                echo $row['nomeExame'];
                                                ?>
                                            </option>
                                            <?php
                                            $query = "SELECT * FROM ifsp_lacif.exames ORDER BY idTipoExame ASC";
                                            $resultado = mysqli_query($conn, $query);
                                            while ($linha = mysqli_fetch_assoc($resultado)) {

                                                if ($linha['idTipoExame'] != $linhaUnica['idTipoExame']){
                                                    ?>
                                                    <option value="<?php echo $linha['idTipoExame'];?>">
                                                        <?php echo $linha['nomeExame'];?>
                                                    </option>
                                                    <?php
                                                }}
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
                                        <?php
                                        if ($linhaUnica['resultado'] == "") {
                                            $imagemVelha = "";
                                            ?>
                                            <?php
                                        } else {
                                            $imagemVelha = $linhaUnica['resultado'];
                                            ?>
                                            <?php
                                        }
                                        ?>
                                        <input class="form-control" type="file" id="arquivo" name="arquivo">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <p class="text-right">
                                        <input type="submit" id="Atualizar" name="Atualizar" class="btn btn-primary pull-right" value="Atualizar">
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
                Consulta Atualizada com Sucesso!
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


<script type="text/javascript">
    $(document).ready(function() {


        $("#idConvenio").change(()=>{
            let conv = $("#idConvenio").val();
            $("#porcentagem").val("Requisitando dados...");
            $.get("getPercentByConvenio.php?idConvenio="+conv, function(data, status){
                let dados = JSON.parse(data);

                $("#porcentagem").val(dados[0].porcentagem)
            });
        })
        $("#idTipoExame").change(()=>{
            let conv = $("#idTipoExame").val();

            $.get("getValorByExame.php?idTipoExame="+conv, function(data, status){
                let dados = JSON.parse(data);

                $("#valor").val(dados[0].valor)
            });
        })


    });
</script>

<script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
<script src="lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="lib/canvas/canvasjs.min.js"></script>
<script src="lib/canvas/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.init();
        App.dashboard();

    });
</script>


</body>

<?php
//se ele clicou no botão alterar
if (isset($_POST['Atualizar'])) {
    $novoNome = $imagemVelha;
    /* EXCLUIR A IMAGEM ANTIGA */
    if (isset($_FILES['arquivo'])) {
        if (isset($_POST['imagemVelha'])) {
            echo unlink("img/" . $imagemVelha);//APAGA A IMAGEM NO DIRETÓRIO
        }

        if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];//images.png
            $extensao = strrchr($nome, '.');//png
            $extensao = strtolower($extensao);
            if (strstr('.svg;.pdf;.png;.jpg;.jpeg;.gif', $extensao)) {
                $novoNome = md5(microtime()) . '.' . $extensao;
                $destino = 'img/' . $novoNome;
                if (@move_uploaded_file($arquivo_tmp, $destino)) {
                    //echo "Arquivo salvo com sucesso";
                } else {
                    echo "Erro ao salvar o arquivo";
                }
            } else {
                echo "Formato de arquivo invalido!";
            }
        }
    }

    $title = $_POST['title'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $horario = $_POST['horario'];
    $idConvenio = $_POST['idConvenio'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $idTipoExame = $_POST['idTipoExame'];
    $resultado = $novoNome;
    $status = $_POST['status'];


//sql to inset the values to the database
    $result = "update ifsp_lacif.consultas 
set title = '$title', 
    description='$description', 
    start='$start', 
    horario='$horario', 
    idConvenio='$idConvenio', 
    celular='$celular', 
    cpf='$cpf',
    idTipoExame='$idTipoExame',
    resultado='$resultado',
    status='$status' WHERE id = $id";

    $row = mysqli_query($conn, $result);

    echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesConsulta.php">';


}
?>

</html>