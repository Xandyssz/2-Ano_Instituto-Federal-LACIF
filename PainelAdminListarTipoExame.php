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

?>

<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
<script src="js/funcoes.js"></script>
<!--Header-->
<title>LACIF - Visualizar Tipo Exame</title>

<?php include('includes/header.php'); ?>
<!--End Header-->

<body>

    <!--Sidebar-->
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="PainelAdminAgenda.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Tipo Exame</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visualizar Tipo Exame</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral de Tipo Exame</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width:20%;">ID</th>
                                    <th style="width:20%;">Tipo de Exame</th>
                                    <th style="width:20%;">Valor do Exame</th>

                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.exames order by idTipoExame";
                                $dados = mysqli_query($conn, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
//                                    $dataBrasil = implode('/', array_reverse(explode('-', $linha['datanasc'])));

                                    ?>
                                    <tr>
                                        <td><?php  echo $linha['idTipoExame']; ?></td>
                                        <td><?php  echo $linha['nomeExame']; ?></td>
                                        <td><?php  echo $linha['valor']; ?></td>
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


</body>

</html>