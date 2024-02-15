<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "ifsp_lacif";

// Criar a conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn)
{
    die("Falha na conexao: " . mysqli_connect_error());
}
?>
