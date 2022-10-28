<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}
$id = $_GET['id'];

if ($id > 0) {
    $query = "SELECT * FROM ifsp_lacif.noticias WHERE idNoticia = $id";
    $dados = mysqli_query($conn, $query);
    $linhaUnica = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarNoticia.php">';
}
?>


<!DOCTYPE html>
<html lang="en">
<script src="js/funcoes.js"></script>

<!--Header-->
<title>LACIF - Editar Noticia</title>

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
                        <div class="card-header card-header-divider">Atualizar dados da Noticia<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="titulo">Digite o Titulo da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="titulo" name="titulo" type="text" value="<?php  echo $linhaUnica['titulo']; ?>" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite a Descricao da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="descricao" name="descricao" type="text" value="<?php  echo $linhaUnica['descricao']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="dataNoticia">Data da Noticia</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="dataNoticia" name="dataNoticia" type="date" value="<?php  echo $linhaUnica['dataNoticia']; ?>" required>
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
                                    <?php
                                    if ($linhaUnica['img_user'] == "") {
                                        $imagemVelha = "";
                                        ?>
                                        <img src="img/userpadrao.png" name="visualizar" id="visualizar" width="200px" height="200px">
                                        <?php
                                    } else {
                                        $imagemVelha = $linhaUnica['img_user'];
                                        ?>
                                        <img src="img/<?php echo $linhaUnica['img_user'];?>" name="visualizar" id="visualizar" width="200px" height="200px">
                                        <?php
                                    }
                                    ?>
                                </div>

                                <div class="col-sm-6">
                                    <p class="text-right">
                                        <button class="btn btn-space btn-primary" name="Atualizar" type="submit">Atualizar</button>
                                        <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='PainelAdminAcoesNoticia.php'" value="Voltar">
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

        $('#dataNoticia').attr('min', maxDate);
    });
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
</body>

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

</html>

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

    $titulo             = $_POST['titulo'];
    $descricao          = $_POST['descricao'];
    $dataNoticia = $_POST['dataNoticia']; // 19/01/1980
    $dataBrasil = implode('-', array_reverse(explode('/', "$dataNoticia")));// 1980-01-19
    $img_user    = $novoNome;// RECEBE A NOVA IMAGEM


//Fazer o update no banco de dados

    $result = "UPDATE ifsp_lacif.noticias 
    SET titulo = '$titulo', 
        descricao = '$descricao',
        dataNoticia = '$dataBrasil', 
        img_user = '$img_user'  
        WHERE idNoticia = $id";

    $row = mysqli_query($conn, $result);
    echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesNoticia.php">';
}
?>