<?php

$cpf = $_POST ['cpf'];
$password = $_POST ['password'];
define("CPF_Correto", "123");
define("Password_Correta", "123");

$tipo_acesso = "Administrador"; // aqui eu testo os meus niveis de acesso

if (!empty($_POST) && (empty($_POST['cpf'])|| empty ($_POST['password']))){

    echo "<div align = 'center'> <h1> Usuario e/ou senha invalido(s)! </h1> </div>";
    echo "<meta http-equiv = 'refresh' content = '1; URL=index.php'>";
    header ("location: index.php");
    exit;
}elseif ($cpf == CPF_Correto && $password == Password_Correta){
    session_start();
    $_SESSION['tipo_acesso'] = $tipo_acesso;
    $_SESSION['cpf'] = $cpf;// inserindo os dados na sessão
    $_SESSION['password'] = $password;
    $_SESSION['sessiontime'] = time() + 60*30; // tempo de expiração da pagina

    header("location: ../PacienteAutenticado/index.php");

}else {
    echo "<div align = 'center'> <h1> Usuario e/ou senha invalido(s)! </h1> </div>";
    echo "<meta http-equiv = 'refresh' content = '5; URL=index.php'>";
}

?>