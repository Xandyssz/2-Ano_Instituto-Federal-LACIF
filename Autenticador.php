<script src="js/funcoes.js"></script>
<?php

$cpf = $_POST ['cpf'];
$senha = $_POST ['senha'];
$tipo_acesso = $_POST['nivelAcesso']; // aqui eu testo os meus niveis de acesso
define("Cpf_Correto", "123");
define("Senha_Correta", "123");



if (!empty($_POST) && (empty($_POST['cpf'])|| empty ($_POST['senha']))){
        echo "<script>loginMensagem();</script>";
}elseif ($cpf == Cpf_Correto && $senha == Senha_Correta){
    session_start();
    $_SESSION['tipo_acesso'] = $tipo_acesso;
    $_SESSION['cpf'] = $cpf;// inserindo os dados na sessão
    $_SESSION['senha'] = $senha;
    $_SESSION['sessiontime'] = time() + 60*30; // tempo de expiração da pagina

    header("location: IncludeHome.php");

}else {
        echo "<script>loginMensagem();</script>";

}

?>