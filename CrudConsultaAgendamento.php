<?php
session_start();
include_once('conexao.php');  // se ele clicou no botão agendar
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITULO DA PAGINA-->
        <title> LACIF </title>

        <!-- ARQUIVOS JAVA SCRIPT -->
        <link rel="stylesheet" href="css/tabelacss.css">


        <!-- ARQUIVOS JAVA SCRIPT -->
        <script src="js/funcoes.js"></script>

    </head>
    <body>

    <section class="book" id="book">

        <h1 class="heading"> <span>Agende</span> Agora </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="" method="POST">
                <h3>Agende sua consulta</h3>
                <input type="text"              id="title"         name="title"         placeholder="Digite o Nome Completo"   class="box">
                <input type="text"              id="description"   name="description"  placeholder="Digite a Descricao"        class="box">
                <input type="date"              id="start"         name="start"                                                class="box">
                <input type="date"              id="end"           name="end"                                                  class="box">
                <input type="text"              id="convenio"      name="convenio"     placeholder="Digite o Convenio"         class="box">
                <input type="text"              id="celular"       name="celular"      placeholder="Digite Numero de Contato"  class="box">
                <input type="text"              id="cpf"           name="cpf"          placeholder="Digite o CPF"              class="box">


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

                <select id="tipo" name="tipo" class="box">
                    <option value="" selected>Selecione o Tipo do exame...</option>
                    <option value="Covid19">Covid 19 </option>
                    <option value="CheckuP">Check-Up</option>
                    <option value="Sangue">Sangue</option>
                    <option value="Fezes">Fezes</option>
                </select>

                <input type="submit" name="agendar" class="btn btn-danger" value="agendar"/>
            </form>

        </div>

    </section>

    <!-- ARQUIVOS JAVA SCRIPT -->
    <script src="js/validar.js"></script>

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

if (isset($_POST['agendar'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $convenio = $_POST['convenio'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $tiposanguineo = $_POST['tiposanguineo'];
    $tipo = $_POST['tipo'];
    $sexo = $_POST['sexo'];

//    $IniciodataBrasil = implode('-', array_reverse(explode('/', $start)));
//    $FimdataBrasil = implode('-', array_reverse(explode('/', $end)));

    // Fazer o insert  no banco de dados
    $query = "SELECT cons.* FROM ifsp_lacif.consultas cons 
    WHERE cons.start = '$start' 
    AND cons.end = '$end' 
    AND cons.cpf = '$cpf'";
    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    } else
    {
        $result = "INSERT INTO ifsp_lacif.consultas 
            (title, description, start, end, convenio, celular, cpf, tiposanguineo, tipo, sexo) 
            VALUES ('$title', '$description', '$start', '$end', '$convenio', '$celular', '$cpf', '$tiposanguineo', '$tipo', '$sexo')";

        var_dump($result);
        $row = mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=PainelAdminListarConsulta.php">';

    }
}
?>