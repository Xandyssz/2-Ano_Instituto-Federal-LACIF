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
    $query = "SELECT * FROM ifsp_lacif.patrocinadores WHERE idPatrocinador = $id";
    $dados = mysqli_query($conn, $query);
    $linhaUnica = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarPatrocinador.php">';
}
?>


    <!DOCTYPE html>
    <html lang="en">
    <script src="js/funcoes.js"></script>

    <!--Header-->
    <title>LACIF - Editar Patrocinador</title>

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
                            <div class="card-header card-header-divider">Atualizar dados do Patrocinador<span class="card-subtitle">Por favor, preencha os dados necessários.</span></div>
                            <div class="card-body">

                                <form action="" method="POST" enctype="multipart/form-data">


                                    <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="titulo">Digite o Nome do Patrocinador</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="titulo" name="titulo" type="text" value="<?php  echo $linhaUnica['titulo']; ?>" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="descricao">Digite a Descricao do Patrocinador</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="descricao" name="descricao" type="text" value="<?php  echo $linhaUnica['descricao']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="ativo">Ativo  0[Visualizar] - [1 Ocultar]:</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input class="form-control" id="ativo" name="ativo" type="number" min="0" max="1" value="<?php  echo $linhaUnica['ativo']; ?>" required>
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
                                        if ($linhaUnica['img_nome'] == "") {
                                            $imagemVelha = "";
                                            ?>
                                            <img src="img/userpadrao.png" name="visualizar" id="visualizar" width="200px" height="200px">
                                            <?php
                                        } else {
                                            $imagemVelha = $linhaUnica['img_nome'];
                                            ?>
                                            <img src="img/<?php echo $linhaUnica['img_nome'];?>" name="visualizar" id="visualizar" width="200px" height="200px">
                                            <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <input type="submit" id="Atualizar" name="Atualizar" class="btn btn-primary pull-right" value="Atualizar">
                                            <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='PainelAdminAcoesPatrocinadores.php'" value="Voltar">
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
                    Patrocinador Atualizado com Sucesso!
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
    $ativo = $_POST['ativo']; // 19/01/1980
    $dataBrasil = implode('-', array_reverse(explode('/', "$ativo")));// 1980-01-19
    $img_nome    = $novoNome;// RECEBE A NOVA IMAGEM


//Fazer o update no banco de dados

    $result = "UPDATE ifsp_lacif.patrocinadores 
    SET titulo = '$titulo', 
        descricao = '$descricao',
        ativo = '$ativo', 
        img_nome = '$img_nome'  
        WHERE idPatrocinador = $id";

    $row = mysqli_query($conn, $result);
    echo "<script>$(document).ready(function() { $('#msgInsert').modal(); })</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesPatrocinadores.php">';
}
?>