<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<!-- ARQUIVOS JAVA SCRIPT -->
<link rel="stylesheet" href="css/foto.css">

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
                            <li class="breadcrumb-item"><a href="#">Noticia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastrar Noticia</li>
                        </ol>
                    </nav>
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Adicionar Detalhes da Noticia<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
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
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="titulo">Digite o Titulo da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="titulo" name="titulo" type="text" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite a Descricao da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="descricao" name="descricao" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="dataNoticia">Data da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="dataNoticia" name="dataNoticia" type="date" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="arquivo" class="form-label">Imagem:</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="file" class="form-control" name="arquivo"
                                                onchange="previewImagem();">
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12" style="text-align:center;">
                                        <br>
                                        <img name="visualizar" id="visualizar" width="400px" height="250px">
                                    </div>


                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-primary" name="add_outNews" type="submit">Registrar</button>
                                            <button class="btn btn-space btn-secondary">Cancelar</button>
                                        </p>
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

<!-- VISUALIZAR IMAGEM -->
<script>
    function previewImagem(){
        var imagem = document.querySelector('input[name=arquivo]').files[0];
        var preview = document.querySelector('img[name=visualizar]');
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if(imagem){
            reader.readAsDataURL(imagem);
        } else {
            preview.src = "";
        }
    }
</script>


<script src="js/foto.js"></script>

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

if (isset($_POST['add_outNews'])){
    $novoNome="teste";

    if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $nome = $_FILES['arquivo']['name'];
        $extensao = strrchr($nome, '.');
        $extensao = strtolower($extensao);
        var_dump(strstr('.svg;.pdf;.png;.jpg;.jpeg;.gif', $extensao));
//        echo "<br>";
//        exit;
//        echo $extensao."<br>";
        if (strstr('.svg;.pdf;.png;.jpg;.jpeg;.gif', $extensao)) {
            $novoNome = md5(microtime()) . '.' . $extensao;
            $destino = 'images/' . $novoNome;
            if (@move_uploaded_file($arquivo_tmp, $destino)) {
                echo "Arquivo salvo com sucesso";
//                exit;
            } else {
                echo "Erro ao salvar o arquivo";
            }
        } else {
            echo "Formato de arquivo invalido!";
        }
    }

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $dataNoticia = $_POST['dataNoticia'];
    $img_user = $novoNome;
//    echo "imagem->".$img_user;
//    exit;

//    $dataBrasil = implode('-', array_reverse(explode('/', $datanasc)));
    // Fazer o insert  no banco de dados

    $query = "SELECT * FROM ifsp_lacif.noticias news 
    WHERE news.titulo = '$titulo' 
    AND news.dataNoticia = '$dataNoticia'";


    $row = mysqli_query($mysqli, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    }

    else
    {
//        echo $img_user;
//        exit;
        $result = "INSERT INTO ifsp_lacif.noticias 
        (titulo, descricao, dataNoticia, imagem)
        VALUES ('$titulo', '$descricao', '$dataNoticia', '$img_user')";
        $row = mysqli_query($mysqli, $result);
        $msg = "News Details Add";

        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
//        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarUsuario.php">';
    }

}
?>
