<?php
session_start();
include_once('conexao.php');  // se ele clicou no bot達o salvar
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- TITULO DA PAGINA -->
        <title> LACIF | Registro Usuario </title>

        <!-- ARQUIVOS FAVICON -->
        <link href="css/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="css/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="css/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="css/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="css/ico/favicon.png" rel="shortcut icon">

        <!-- ARQUIVOS CSS -->
        <link rel="stylesheet" href="css/tabelacss.css">

        <!-- ARQUIVOS JAVA SCRIPT -->
        <script src="js/dataRetograda.js"></script>
        <script src="js/funcoes.js"></script>

    </head>
    <body>

    <section class="book" id="book">

        <h1 class="heading"> <span>REALIZAR</span>-CADASTRO</h1>

        <div class="row">

            <div class="image">
                <img src="img/images/book2-img.svg" alt="">
            </div>

            <form action="" method="POST"> <!-- PARA LISTAR NO BANCO DE DADOS NO [ACTION - PRECISA SER # se n達o n達o grava no BANCO -->
                <h3>Cadastro</h3>
                <input type="text"  name="nome" id="nome" placeholder="Digite o Nome Completo" class="box" required>
                <input type="text" name="cpf"  id="cpf" placeholder="Digite o CPF" class="box" required>
                <input type="email"  name="email" id="email" placeholder="Digite o email" class="box" required>
                <input type="password"  name="senha" id="senha" placeholder="Digite a senha" class="box" required>
                <input type="text" name="celular" id="celular" placeholder="Digite Numero de Contato" class="box" required>
                <input type="text" name="endereco" id="endereco" placeholder="Digite o endereco" class="box" required>

                <select id="tiposanguineo "name="tiposanguineo" class="box">
                    <option value=""selected>Selecione o tipo sanguineo...</option>
                    <option value="O-">O-</option>
                    <option value="O">O+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB">AB+</option>
                    <option value="B-">B-</option>
                    <option value="B">B+</option>
                    <option value="A-">A-</option>
                    <option value="A">A+</option>
                </select>

                <select id="sexo" name="sexo" class="box">
                    <option value="" selected>Selecione o sexo...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>

                <input type="date"  name="datanasc" id="datanasc" class="box" required>
                <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='lacif_home.php'" value="Voltar">
                <input type="submit" name="cadastrar" id="cadastrar" class="btn btn-danger" value="cadastrar">


            </form>
        </div>
    </section>

    <!-- FORMATAR - IMPOSSIBILITAR O USUARIO DE SELECIONAR DATA ANTIGA (DATA) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;

            $('#datanasc').attr('max', maxDate);

        });
    </script>


    <!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $("#celular").mask("(99) 99999-9999");
        $("#cpf").mask("999.999.999-99");
    </script>
    <script>
        $(#celular).mask("(99) 99999-9999");
        $(#cpf).mask("999.999.999-99");
    </script>


    </body>
    </html>


<?php

if (isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $tiposanguineo = $_POST['tiposanguineo'];
    $sexo = $_POST['sexo'];
    $datanasc = $_POST['datanasc'];


    $dataBrasil = implode('-', array_reverse(explode('/', $datanasc)));
    // Fazer o insert  no banco de dados

    $query = "SELECT * FROM ifsp_lacif.usuarios users 
    WHERE users.cpf = '$cpf'
    AND users.email = '$email'";

    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    }

    else
    {
        $result = "INSERT INTO ifsp_lacif.usuarios 
        (nome, cpf, email, senha, celular, endereco, tiposanguineo, sexo, datanasc) 
        VALUES ('$nome', '$cpf', '$email', '$senhaCript', '$celular', '$endereco', '$tiposanguineo', '$sexo', '$dataBrasil')";
        $row = mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">';
    }

}
?>