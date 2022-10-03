<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/funcoes.js"></script>
</head>
<body>
<?php
include_once("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($_POST) && (empty($_POST['email']) || empty($_POST['senha']))) {
    echo "<script>loginMensagem();</script>";
} else {
    session_start();
    $email_escape = addslashes($email);
    $senha_escape = addslashes($senha);

    $sql = "SELECT * FROM ifsp_lacif.usuarios
                WHERE email = '{$email_escape}' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $nivel = mysqli_fetch_assoc($query);

    if ( mysqli_affected_rows($conn) > 0 ) {
        /* VERFICAR SENHA CRIPTOGRAFADA */
        if (password_verify($senha_escape, $nivel['senha'])) {
            /* TUDO VALIDADO, PARA ACESSO */
            $_SESSION['idusuario'] = $nivel['idusuario'];
            $_SESSION['nome']  = $nivel['nome'];
            $_SESSION['cpf']  = $nivel['cpf'];
            $_SESSION['email'] = $nivel['email'];
            $_SESSION['senha'] = $nivel['senha'];
            $_SESSION['celular']  = $nivel['celular'];
            $_SESSION['endereco']  = $nivel['endereco'];
            $_SESSION['datanasc']  = $nivel['datanasc'];
            $_SESSION['tipo_acesso'] = $nivel['tipo_acesso'];
            $_SESSION['sessiontime'] = time() + 60 * 30;
            header("location: lacif_home.php"); // TUDO OK
        } else {
            echo "<script>loginMensagem();</script>";
            session_destroy();
            unset($_SESSION['idusuario']);
            unset($_SESSION['nome']);
            unset($_SESSION['cpf']);
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['celular']);
            unset($_SESSION['endereco']);
            unset($_SESSION['datanasc']);
            unset($_SESSION['tipo_acesso']);
            echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=sair.php">';
        }
    } else {
        // usuario n existe
        echo "<script>loginMensagem();</script>";
        echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=sair.php">';

    }
}
?>
</body>
</html>