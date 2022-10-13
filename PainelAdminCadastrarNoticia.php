<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}

?>

    <!DOCTYPE html>
    <html lang="en">
    <!-- ARQUIVOS JAVA SCRIPT -->
    <script src="js/funcoes.js"></script>
    <!--Header-->
    <title>LACIF - Cadastrar Usuarios</title>
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
                                <form action="" method="POST" enctype="multipart/form-data"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
                                    <h3>Cadastro de Noticia</h3>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite o Titulo da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" type="text" id="titulo" name="titulo"  placeholder="Digite o Titulo da Noticia" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite a Descrição da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" type="text" id="descricao" name="descricao"  placeholder="Digite a Descrição da Noticia" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite a Data da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" type="text" id="data" name="data"  placeholder="Digite a Data da Noticia" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Upload da Foto da Noticia</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" type="file" id="arquivo" name="arquivo" onchange="previewImagem()"; required>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12" style="text-align:center;">
                                        <br>
                                        <img src="img/userpadrao.png" name="visualizar"
                                             id="visualizar" width="200px" height="200px">
                                        <br>
                                        <br>
                                        <input type="button" name="listar" class="btn btn-primary pull-right" value="Cancelar" onclick="window.location.href='PainelAdminAcoesNoticia.php'">
                                        <input type="submit" id="salvar" name="salvar" class="btn btn-primary pull-right" value="Salvar">
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

    <!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $("#data").mask("99/99/9999");
    </script>
    <script>
        $(#data).mask("99/99/9999");
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
//se ele clicou no botão salvar
if (isset($_POST['salvar'])) {

    if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $titulo = $_FILES['arquivo']['name'];//images.png
        $extensao = strrchr($titulo, '.');//png
        $extensao = strtolower($extensao);
        if (strstr('.svg;.pdf;.png;.jpg;.jpeg;.gif', $extensao)) {
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

    $titulo             = $_POST['titulo'];
    $descricao          = $_POST['descricao'];
    $img_user           = $novotitulo;

    $dataNoticia = $_POST['data']; // 19/01/1980
    $dataBrasil = implode('-', array_reverse(explode('/', "$dataNoticia")));// 1980-01-19

    //Fazer o insert no banco de dados
    $query = "SELECT titulo FROM ifsp_lacif.noticias WHERE titulo = '$titulo'";
    $row = mysqli_query($conn, $query);
    if (mysqli_num_rows($row) > 0) {
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesNoticia.php">';
    } else {
        $result = "INSERT INTO ifsp_lacif.noticias (titulo, dataNoticia, descricao, img_user) 
            VALUES ('$titulo', '$dataBrasil', '$descricao', '$img_user')";

        $row = mysqli_query($conn, $result);
        var_dump($result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
//        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesNoticia.php">';
    }
}
?>