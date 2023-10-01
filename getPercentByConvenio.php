<?php
    include_once 'conexao.php';
    $convenioProcurado = $_GET['idConvenio'];



    $sql = "SELECT * FROM ifsp_lacif.convenios WHERE ifsp_lacif.convenios.idConvenio = '$convenioProcurado'";

    $comando = mysqli_query($conn, $sql);
    //$result = mysqli_fetch_assoc($comando);

    $array = Array();
    $result = mysqli_fetch_assoc($comando);
    array_push($array,(array_map("utf8_encode", $result)));

    echo json_encode($array);