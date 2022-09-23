<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

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
    <!-- TITULO DA PAGINA-->
    <title> LACIF </title>

    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="../../css/tabelacss.css">

    <!-- ARQUIVOS JAVA SCRIPT-->
    <script src="../../js/funcoes.js"></script>

</head>
<body>

<section class="book" id="book">
    <h1 class="heading"> <span>ALTERAÇÃO DE CADASTRO DA NOTICIA</span></h1>

    <div class="row">

        <div class="image">
            <img src="../../images/book3-img.svg" alt="">
        </div>

        <form action="#" method="POST">
            <h3>Alterar Cadastro da Noticia</h3>
            <input type="text"  name="titulo" id="titulo" placeholder="Digite o Titulo da Noticia" class="box" value="<?php echo $linhaUnica['titulo']?>" required>
            <input type="text"  name="descricao" id="descricao" placeholder="Digite Conteudo da Noticia" class="box" value="<?php echo $linhaUnica['titulo']?> "required>
            <input type="text"  name="dataNoticia" id="dataNoticia" class="box" placeholder="Digite Data da Noticia" value="<?php echo $linhaUnica['dataNoticia']?> "required>
            <input type="file" class="box" name="imagem" id="imagem" value="<?php echo $linhaUnica['imagem']?>" required>


            <input type="submit" id="alterar" name="alterar" class="btn btn-primary pull-right" value="alterar">
        </form>
        <script src="../../js/formulario.js"></script>
</section>
</body>
</html>

<?php
//se ele clicou no botão alterar
if (isset($_POST['alterar'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $dataNoticia = $_POST['dataNoticia'];
    $imagem = $_POST['imagem'];


//Fazer o update no banco de dados

    $result = "UPDATE ifsp_lacif.noticias 
    SET titulo = '$titulo', 
        descricao = '$descricao',
        dataNoticia = '$dataNoticia', 
        imagem = '$imagem',  
        WHERE idNoticia = $id";

    $row = mysqli_query($conn, $result);
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    var_dump($result);
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudNoticiaListar.php">';
}
?>


