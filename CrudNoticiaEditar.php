<?php
session_start();
include_once('sessao.php');//verifica se tem sessão e se está tudo ok!
//chama a conecao com banco de dados
include_once('conexao.php');

// Verifica se existe os dados da sessão de login
if (!isset($_SESSION["tipo_acesso"])) {
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
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudNoticiaListar.php">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ARQUIVOS FAVICON -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- TITULO DA PAGINA-->
    <title> LACIF - Editar Noticia</title>

    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="css/tabelacss.css">

    <!-- ARQUIVOS JAVA SCRIPT-->
    <script src="js/funcoes.js"></script>

</head>
<body>

<section class="book" id="book">
    <h1 class="heading"> <span>ALTERAÇÃO DE CADASTRO DA NOTICIA</span></h1>

    <div class="row">

        <div class="image">
            <img src="img/images/book3-img.svg" alt="">
        </div>

        <form action="" method="POST" enctype="multipart/form-data"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
            <h3>Cadastro de Noticia</h3>
            <input type="text"  name="titulo" id="titulo" placeholder="Digite o Titulo da Noticia" class="box" value="<?php echo $linhaUnica['titulo']?>" required>
            <input type="text"  name="descricao" id="descricao" placeholder="Digite Conteudo da Noticia" class="box" value="<?php echo $linhaUnica['descricao']?>" required>
            <input type="date"  name="data" id="data" class="box" placeholder="Digite Data da Noticia" value="<?php echo $linhaUnica['dataNoticia']?>" required>

            <input type="file"  name="arquivo" id="arquivo" class="box" onchange="previewImagem()";
            <div class="form-group col-sm-12" style="text-align:center;">

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
                <br>
                <input type="button" name="listar" class="btn btn-primary pull-right" value="Cancelar" onclick="window.location.href='CrudNoticiaListar.php'">
                <input type="submit" id="salvar" name="salvar" class="btn btn-primary pull-right" value="Salvar">
                <br>
            </div>
    </div>
    <br>
    </form>
        <script src="js/formulario.js"></script>

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

    <!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
    </script>
</section>
</body>
</html>

<?php
//se ele clicou no botão alterar
if (isset($_POST['salvar'])) {
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
    $dataNoticia = $_POST['data']; // 19/01/1980
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
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudNoticiaListar.php">';
}
?>


