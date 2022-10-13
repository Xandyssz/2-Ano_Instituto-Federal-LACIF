<?php
session_start();
include_once("conexao.php");
// Verifica se existe os dados da sessão de login
if (!isset($_SESSION["tipo_acesso"])) {
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
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

    <!-- TITULO DA PAGINA -->
    <title>Noticia Delete</title>


    <!-- ARQUIVOS JAVA SCRIPT -->
    <script src="../js/funcoes.js"></script>

</head>
<body>

<?php
$idnoticia = $_GET['id'];
if ($idnoticia > 0) {
    $query = "DELETE FROM ifsp_lacif.noticias WHERE idNoticia = $idnoticia";
    $dados = mysqli_query($conn, $query);
    echo "<script>OpcaoMensagens(3);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesNoticia.php">';
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminAcoesNoticia.php">';
}
?>
</body>
</html>