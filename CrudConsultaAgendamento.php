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
                <input type="text"   id="nome"          name="nome"         placeholder="Digite o Nome Completo"    class="box">
                <input type="number" id="cpf"           name="cpf"          placeholder="Digite o CPF"              class="box">
                <input type="number" id="celular"       name="celular"      placeholder="Digite Numero de Contato"  class="box">
                <input type="text"   id="convenio"      name="convenio"     placeholder="Digite o Convenio"         class="box">
                <input type="date"   id="data_cons"     name="data_cons"                                            class="box">
                <input type="time"   id="horario_cons"  name="horario_cons"                                         class="box">

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

    </body>
    </html>


<?php

if (isset($_POST['agendar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $convenio = $_POST['convenio'];
    $data_cons = $_POST['data_cons'];
    $horario_cons = $_POST['horario_cons'];
    $tiposanguineo = $_POST['tiposanguineo'];
    $sexo = $_POST['sexo'];
    $tipo = $_POST['tipo'];

    // Fazer o insert  no banco de dados
    $query = "SELECT cons.* FROM ifsp_lacif.consultas cons 
    WHERE cons.nome = '$nome' 
    AND cons.cpf = '$cpf' 
    AND cons.horario_cons";

    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    } else
    {
        $result = "INSERT INTO ifsp_lacif.consultas 
            (nome, cpf, celular, convenio, data_cons, horario_cons, tiposanguineo, sexo, tipo) 
            VALUES ('$nome', '$cpf', '$celular', '$convenio', '$data_cons', '$horario_cons', '$tiposanguineo', '$sexo', '$tipo')";
        $row = mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudConsultaListar.php">';
    }
}
?>