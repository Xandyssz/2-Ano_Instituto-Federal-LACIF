<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITULO DA PAGINA -->
    <title>Usario Delete</title>

    <!-- ARQUIVOS JAVA SCRIPT -->
    <script src="js/funcoes.js"></script>

</head>
<body>
<?php
$id = $_GET['id'];
if ($id > 0) {
    $query = "DELETE FROM ifsp_lacif.usuarios WHERE idusuario = $id";
    $dados = mysqli_query($conn, $query);
    echo "<script>OpcaoMensagens(3);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudUsuarioListar.php">';
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudUsuarioListar.php">';
}
?>
</body>
</html>