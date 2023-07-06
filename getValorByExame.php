<?php
include_once 'conexao.php';
$exameProcurado = $_GET['idTipoExame'];



$sql = "SELECT * FROM lacifs93_ifsp_lacif.exames WHERE lacifs93_ifsp_lacif.exames.idTipoExame = '$exameProcurado'";

$comando = mysqli_query($conn, $sql);
//$result = mysqli_fetch_assoc($comando);

$array = Array();
$result = mysqli_fetch_assoc($comando);
array_push($array,(array_map("utf8_encode", $result)));

echo json_encode($array);