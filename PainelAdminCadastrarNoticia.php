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
    <title>LACIF - Cadastrar Noticia</title>
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
                                            <input class="form-control" type="date" id="data" name="data"  placeholder="Digite a Data da Noticia" required>
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
                                        <input type="submit" id="Registrar" name="Registrar" class="btn btn-primary pull-right" value="Registrar">
                                        <input type="button" name="listar" class="btn btn-primary pull-right" value="Cancelar" onclick="window.location.href='PainelAdminAcoesNoticia.php'">
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

    <!--     FORMATAR - IMPOSSIBILITAR O USUARIO DE SELECIONAR DATA ANTIGA (DATA) -->-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <!--    <script>-->
    <!--        $(function(){-->
    <!--            var dtToday = new Date();-->
    <!---->
    <!--            var month = dtToday.getMonth() + 1;-->
    <!--            var day = dtToday.getDate();-->
    <!--            var year = dtToday.getFullYear();-->
    <!--            if(month < 10)-->
    <!--                month = '0' + month.toString();-->
    <!--            if(day < 10)-->
    <!--                day = '0' + day.toString();-->
    <!--            var maxDate = year + '-' + month + '-' + day;-->
    <!---->
    <!--            $('#data').attr('min', maxDate);-->
    <!--        });-->
    <!--    </script>-->


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
    <!---->
    <!--     FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>-->
    <!--    <script>-->
    <!--        $("#data").mask("99/99/9999");-->
    <!--    </script>-->
    <!--    <script>-->
    <!--        $(#data).mask("99/99/9999");-->
    <!--    </script>-->

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
                    Noticia Cadastrada com Sucesso!
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
                    Ocorreu um erro, Noticia já cadastrada!
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

    </html>
<?php
//se ele clicou no botão salvar
if (isset($_POST['Registrar'])) {

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
    $query = "SELECT descricao FROM ifsp_lacif.noticias WHERE descricao = '$descricao'";
    $row = mysqli_query($conn, $query);
    if (mysqli_num_rows($row) > 0) {
        echo "<script>$(document).ready(function() { $('#msgconflito').modal(); })</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminCadastrarNoticia.php">';

    } else {
        $result = "INSERT INTO ifsp_lacif.noticias (titulo, dataNoticia, descricao, img_user) 
            VALUES ('$titulo', '$dataBrasil', '$descricao', '$img_user')";

        $row = mysqli_query($conn, $result);
        echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesNoticia.php">';
    }
}
?>