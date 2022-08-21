<?php
//caso o usuario não esteja autenticado limpa os dados e redireciona

if(!isset($_SESSION['cpf']) && !isset($_SESSION['senha'])){
    session_destroy ();
    unset($_SESSION ['cpf']);
    unset ($_SESSION ['senha']);
}else {
    if(isset($_SESSION['sessiontime'])){
        if(isset($_SESSION['sessiontime'])< time ()){
            unset($_SESSION ['cpf']);
            unset ($_SESSION ['senha']);
            header ("location: IndexCalendario22.php");
            echo"<script type = 'text/javascript'>SessaonExpirada();</script>";
        }else {
            $_SESSION ["sessiontime"] = time() +60*30;
        }

    }else {

        session_destroy();
        unset($_SESSION ['cpf']);
        unset ($_SESSION ['senha']);
        header ("location: IndexCalendario22.php");
        echo"<script type = 'text/javascript'>SessaonExpirada();</script>";

    }
}
?>