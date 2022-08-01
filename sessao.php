<?php
//caso o usuario não esteja autenticado limpa os dados e redireciona

if(!isset($_SESSION['cpf']) && !isset($_SESSION['password'])){
    session_destroy ();
    unset($_SESSION ['cpf']);
    unset ($_SESSION ['password']);
    header ("location: index.php");
}else {
    if(isset($_SESSION['sessiontime'])){
        if(isset($_SESSION['sessiontime'])< time ()){
            unset($_SESSION ['cpf']);
            unset ($_SESSION ['password']);
            header ("location: index.php");
            echo"<script type = 'text/javascript'>SessaoExpirada();</script>";
        }else {
            $_SESSION ["sessiontime"] = time() +60*30;
        }

    }else {

        session_destroy();
        unset($_SESSION ['cpf']);
        unset ($_SESSION ['password']);
        header ("location: index.php");
        echo"<script type = 'text/javascript'>SessaoExpirada();</script>";

    }
}
?>