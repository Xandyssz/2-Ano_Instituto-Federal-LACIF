<?php
include("conexao.php");
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$email = stripslashes($email);
$senha = stripslashes($senha);
$email = mysqli_real_escape_string($conn,$email);
$senha = mysqli_real_escape_string($conn,$senha);

$result = mysqli_query($conn, "SELECT * FROM ifsp_lacif.usuarios WHERE email='$email' AND senha='$senha'");

if(mysqli_num_rows($result) != 1){
    echo "<script>alert(' Email ou Senha Errado | Acesso Negado !!! Tente Novamente');
      window.location='index.php';
      </script>";
}else
{
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nivelAcesso'] = $row['nivelAcesso'];

    if($row['nivelAcesso'] == "Paciente")
    {
        header('location: IncludeHome.php');
    }
    else if($row['nivelAcesso'] == "Laboratorista" )
    {
        header("Location: IncludeHome.php");
    }
    else if($row['nivelAcesso'] == "Administrador")
    {
        header("Location: IncludeHome.php");
    }
    else{
        echo "<script>alert('Email ou Senha Errado | Acesso Negado !!! Tente Novamente');
      window.location='index.php';
      </script>";
    }
}

?>