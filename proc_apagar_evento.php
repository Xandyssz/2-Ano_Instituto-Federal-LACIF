<?php

session_start();

include_once 'conexaoCalendario.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
    $query_event = "DELETE FROM ifsp_lacif.events WHERE id=:id";
    $delete_event = $conn->prepare($query_event);

    $delete_event->bindParam("id", $id);

// INICIO ALERTAS
    if($delete_event->execute()){
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">O evento foi apagado com sucesso!</div>';
        header("Location: PainelAdmin.php");
    }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: O evento não foi apagado com sucesso!</div>';
        header("Location: PainelAdmin.php");
    }
} else {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: O evento não foi apagado com sucesso!</div>';
    header("Location: PainelAdmin.php");
}
// FIM ALERTAS

