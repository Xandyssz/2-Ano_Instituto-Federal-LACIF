<?php

$cpf = $_POST['cpf'];
$password = $_POST['password'];
$nivelAcesso = $_POST['nivelAcesso'];

define("CPF_Correto", "000");
// $Email_Correto = "seco.ricardo@ifsp.edu.br";

define("password_correta", "000");
// $Senha_Correta = "123";

define("nivelAcesso_correto", "Doutor");
// $nivelAcesso_Correto = [Verifica o tipo do Paciente]

if ($cpf == CPF_Correto && $password == password_correta && $nivelAcesso == nivelAcesso_correto)

{
    session_start();
    $_SESSION['nivelAcesso'] = $nivelAcesso;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['password'] = $password;
    $_SESSION['sessiontime'] = time() * 1 * 1;
    header("location: ../PacienteAutenticado/index.php");
}

elseif (!empty($_POST) and (empty('cpf')) or !empty($_POST['password'])) {
    echo "<div align='center'>
    </div>";
    echo "<meta http-equiv='refresh' content='2; URL=../erro404.php'>";

}



?>

