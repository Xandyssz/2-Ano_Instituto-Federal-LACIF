<?php
session_start();
include_once('conexao.php');  // se ele clicou no botão salvar
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Registrar-se </title>

        <link rel="stylesheet" href="css/tabelacss.css">

        <script src="js/funcoes.js"></script>

    </head>
    <body>

    <section class="book" id="book">

        <h1 class="heading"> <span>REALIZAR</span>-CADASTRO</h1>

        <div class="row">

            <div class="image">
                <img src="images/book2-img.svg" alt="">
            </div>

            <form action="" method="POST"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se não não grava no BANCO -->
                <h3>Cadastro</h3>
                <input type="text"  name="nome" id="nome" placeholder="Digite o Nome Completo" class="box">
                <input type="number" name="cpf"  id="cpf" placeholder="Digite o CPF" class="box">
                <input type="email"  name="email" id="email" placeholder="Digite o email" class="box">
                <input type="password"  name="senha" id="senha" placeholder="Digite a senha" class="box">
                <input type="number" name="celular" id="celular" placeholder="Digite Numero de Contato" class="box">
                <input type="text" name="endereco" id="endereco" placeholder="Digite o endereco" class="box">
                <input type="date"  name="datanasc" id="datanasc" class="box">

                <input type="button" name="salvar" id="salvar" class="btn btn-danger" onclick="location.href='CrudUsuarioListar.php'" value="Cancelar">
                <input type="submit" name="salvar" id="salvar" class="btn btn-danger" value="salvar">
            </form>
        </div>
    </section>

    </body>
    </html>


<?php

if (isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $datanasc = $_POST['datanasc'];

    // Fazer o insert  no banco de dados

    $query = "SELECT users.* FROM ifsp_lacif.usuarios users WHERE users.nome = '$nome' AND users.cpf = '$cpf'";


    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    }

    else
    {
        $result = "INSERT INTO ifsp_lacif.usuarios (nome, cpf, email, senha, celular, endereco, datanasc) VALUES ('$nome', '$cpf', '$email', '$senha', '$celular', '$endereco', '$datanasc')";
        $row = mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudUsuarioListar.php">';
    }

}
?>