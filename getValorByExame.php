<?php
include_once 'conexao.php';
$convenioProcurado = $_GET['exame'];



$sql = "SELECT * FROM ifsp_lacif.exames WHERE ifsp_lacif.exames.nomeExame = '$convenioProcurado'";

$comando = mysqli_query($conn, $sql);
//$result = mysqli_fetch_assoc($comando);

$array = Array();
$result = mysqli_fetch_assoc($comando);
array_push($array,(array_map("utf8_encode", $result)));

echo json_encode($array);