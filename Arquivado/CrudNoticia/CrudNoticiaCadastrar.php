<?php
session_start();
include_once('sessao.php');//verifica se tem sessão e se está tudo ok!
//chama a conecao com banco de dados
include_once('conexao.php');
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ARQUIVOS FAVICON -->
        <link href="../../ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="../../ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="../../ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="../../ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="../../ico/favicon.png" rel="shortcut icon">

        <!-- TITULO DA PAGINA -->
        <title>Cadastrar Noticia</title>

        <!-- ARQUIVOS CSS -->
        <link rel="stylesheet" href="../../css/tabelacss.css">

        <!-- ARQUIVOS JAVA SCRIPT -->
        <script src="../../js/funcoes.js"></script>

    </head>
    <body>

    <section class="book" id="book">

        <h1 class="heading"> <span>CADASTRAR</span>-NOTICIA</h1>

        <div class="row">

            <div class="image">
                <img src="../../img/images/book3-img.svg" alt="">
            </div>

            <form action="" method="POST" enctype="multipart/form-data"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
                <h3>Cadastro de Noticia</h3>
                            <input type="text"  name="titulo" id="titulo" placeholder="Digite o Titulo da Noticia" class="box" required>
                            <input type="text"  name="descricao" id="descricao" placeholder="Digite Conteudo da Noticia" class="box" required>
                            <input type="text"  name="data" id="data" class="box" placeholder="Digite Data da Noticia" required>
                            <input type="file"  name="arquivo" id="arquivo" class="box" onchange="previewImagem()";

                            <div class="form-group col-sm-12" style="text-align:center;">
                                <br>
                                <img src="../../img/userpadrao.png" name="visualizar"
                                     id="visualizar" width="200px" height="200px">
                                <br>
                                <input type="button" name="listar" class="btn btn-primary pull-right" value="Cancelar" onclick="window.location.href='CrudNoticiaListar.php'">
                                <input type="submit" id="salvar" name="salvar" class="btn btn-primary pull-right" value="Salvar">
                                <br>
                            </div>
                        </div>
                        <br>
               </form>
    </section>




    <!--/#contact-page-->
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="../../js/demo/datatables-demo.js"></script>

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

    <!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, descricao E DATA) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $("#tel_fixo").mask("(99) 9999-9999");
        $("#celular").mask("(99) 99999-9999");
        $("#cep").mask("99999-999");
        $("#cnpj").mask("99.999.999/9999-99");
        $("#data").mask("99/99/9999");
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
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudNoticiaCadastrar.php">';
    } else {
        $result = "INSERT INTO ifsp_lacif.noticias (titulo, dataNoticia, descricao, img_user) 
            VALUES ('$titulo', '$dataBrasil', '$descricao', '$img_user')";

        $row = mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudNoticiaListar.php">';
    }
}
?>