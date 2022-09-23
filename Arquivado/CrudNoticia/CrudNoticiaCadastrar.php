<?php
session_start();
include_once('conexao.php');  // se ele clicou no botão salvar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <img src="../../images/book3-img.svg" alt="">
        </div>

        <form action="" method="POST"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
            <h3>Cadastro de Noticia</h3>
            <input type="text"  name="titulo" id="titulo" placeholder="Digite o Titulo da Noticia" class="box" required>
            <input type="text"  name="descricao" id="descricao" placeholder="Digite Conteudo da Noticia" class="box" required>
            <input type="text"  name="dataNoticia" id="dataNoticia" class="box" placeholder="Digite Data da Noticia" required>
            <input type="file" class="box" name="imagem" id="imagem" required>

            <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='index.php'" value="Voltar">
            <input type="submit" name="cadastrar" id="cadastrar" class="btn btn-danger" value="cadastrar">


        </form>
    </div>
</section>
<script src="../../js/formulario.js"></script>

<!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
    $("#dataNoticia").mask("99/99/9999");
</script>

<script>
    $(#dataNoticia).mask("99/99/9999");
</script>
<!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
</body>
</html>


<?php
    //se ele clicou no botão salvar
    if (isset($_POST['cadastrar'])) {
//        if (isset($_FILES['imagem']['name']) && $_FILES['imagem']['error'] == 0) {
//            $imagem_tmp = $_FILES['imagem']['tmp_name'];
//            $nome = $_FILES['imagem']['name'];
//            $extensao = strrchr($nome, '.');
//            $extensao = strtolower($extensao);
//            if (strstr('.svg;.pdf;.png;.jpg;.jpeg;.gif', $extensao)) {
//                $novoNome = md5(microtime()) . '.' . $extensao;
//                $destino = 'img/' . $novoNome;
//                if (@move_uploaded_file($imagem_tmp, $destino)) {
//                    //echo "Arquivo salvo com sucesso";
//                } else {
//                    echo "Erro ao salvar o arquivo";
//                }
//            } else {
//                echo "Formato de arquivo invalido!";
//            }
//        }

        $titulo           = $_POST['titulo'];
        $descricao        = $_POST['descricao'];
        $dataNoticia      = $_POST['dataNoticia'];
        $imagem = $_POST['imagem'];
        $dataBrasil = implode('-', array_reverse(explode('/', "$dataNoticia")));

        $query = "SELECT titulo FROM ifsp_lacif.noticias WHERE titulo = '$titulo'";
        $row = mysqli_query($conn, $query);
        if (mysqli_num_rows($row) > 0) {
            echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
            echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=#">';
        } else {
            $result ="INSERT INTO ifsp_lacif.noticias (titulo, descricao, dataNoticia, imagem)
            VALUES ('$titulo', '$descricao', '$dataBrasil', '$imagem')";

            echo "<br>".$result;

            $row = mysqli_query($conn, $result);
            echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
            echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=#">';
        }
    }
        ?>