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

<!doctype html>
<html lang="en">
<head>
    <?php include('includes/header.php'); ?>
    <!-- ARQUIVOS FAVICON -->
    <title>LACIF - Gerenciar Patrocinadores</title>
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/funcoes.js"></script>

</head>
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
                <div class="col-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="PainelAdminAgenda.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Patrocinadores</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar Patrocinador</li>
                        </ol>
                    </nav>
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="title">Registro Geral dos Patrocinadores</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th style="width:20%;">ID</th>
                                    <th style="width:20%;">Titulo</th>
                                    <th style="width:20%;">Descricao</th>
                                    <th style="width:20%;">Ativo</th>
                                    <th style="width:20%;">Imagem</th>
                                    <th style="width:20%;">Ação</th>

                                </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM ifsp_lacif.patrocinadores order by idPatrocinador";
                                $dados = mysqli_query($conn, $query ); // comando transação bd

                                while ($linha = mysqli_fetch_assoc($dados)){
//                                    $dataBrasil = implode('/', array_reverse(explode('-', $linha['datanasc'])));

                                    ?>
                                    <tr>
                                        <td><?php  echo $linha['idPatrocinador']; ?></td>
                                        <td><?php  echo $linha['titulo']; ?></td>
                                        <td><?php  echo $linha['descricao']; ?></td>
                                        <td><?php  echo $linha['ativo']; ?></td>
                                        <td>
                                            <img src="img/<?php echo $linha['img_nome'];?>"
                                                 alt="Imagem" width="120px" heigth="120px">
                                        </td>                                        <td>
                                            <?php
                                            echo "<a href='PainelAdminEditarPatrocinador.php?id=".$linha['idPatrocinador']."' title='Alterar'><i class='fa fa-pencil-square'></i></a>";
                                            echo " ";
                                            $id = $linha['idPatrocinador'];
                                            echo "<a href='#' title='Excluir' onclick='confirmacaoExclusaoCarrossel($id);'><i class='fa fa-trash'></i></a>";
                                            ?>
                                        </td>
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

    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</html>