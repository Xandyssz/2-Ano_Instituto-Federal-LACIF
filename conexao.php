<?php
$servidor = "localhost";
$usuario = "lacifs93_user";
$senha = "87d95fwQ!243";
$dbname = "lacifs93_ifsp_lacif";

// Criar a conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn)
{
    die("Falha na conexao: " . mysqli_connect_error());
}
?>