<?php
session_start();
include 'sessao.php';
include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script language="javascript" src="js/funcoes.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/janelasModais.js"></script>
</head>
<body>
<?php
$id = $_GET['id'];

if (!empty($id)) {
    $result_usuario = "DELETE FROM ifsp_lacif.patrocinadores WHERE idPatrocinador = $id";
    mysqli_query($conn, $result_usuario);

    if (mysqli_affected_rows($conn)) {
        echo "<script>$(document).ready(function() { $('#msgDelete').modal(); })</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesPatrocinadores.php">';
    } else {
        echo "<script>$(document).ready(function() { $('#msgErro').modal(); })</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesPatrocinadores.php">';
    }
} else {
    echo "<script>$(document).ready(function() { $('#msgErro').modal(); })</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=PainelAdminAcoesPatrocinadores.php">';
}
?>
<div id="msgDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-center">
                <h5 class="modal-title" id="visulUsuarioModalLabel">Informação!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Patrocinador Excluído com Sucesso!
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
</body>
</html>