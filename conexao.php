<?php
$servidor = "localhost:3307";
$usuario = "root";
$senha = "87d95fwq";
$dbname = "ifsp_lacif";

// Criar a conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn)
{
    die("Falha na conexao: " . mysqli_connect_error());
}
?>