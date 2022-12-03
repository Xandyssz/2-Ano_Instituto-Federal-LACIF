<?php
session_start();
include_once('conexao.php');
include_once('sessao.php');
// se ele clicou no botão aghorarioar
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ARQUIVOS FAVICON -->
        <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="ico/favicon.png" rel="shortcut icon">

        <!-- TITULO DA PAGINA-->
        <title> LACIF - Agendar Consulta</title>

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
                <img src="img/images/book-img.svg" alt="">
            </div>

            <form action="" method="POST">
                <h3>Agende sua consulta</h3>
                <input type="text"              id="title"         name="title"        placeholder="Digite o Nome Completo"    class="box" required>
                <input type="text"              id="description"   name="description"  placeholder="Digite a Descricao"        class="box" required>
                <input type="date"              id="start"         name="start"                                                class="box" required>
                <!--                <input type="time"              id="horario"       name="horario"  min="07:00" max="18:00"                     class="box" required>-->
                <select name="horario" id="horario" class="box" required>
                    <option value="" selected>Selecione o Horario da Consulta...</option>
                    <option value="07:00">07:00</option>
                    <option value="07:15">07:15</option>
                    <option value="07:30">07:30</option>
                    <option value="07:45">07:45</option>
                    <option value="08:00">08:00</option>
                    <option value="08:15">08:15</option>
                    <option value="08:30">08:30</option>
                    <option value="08:45">08:45</option>
                    <option value="09:00">09:00</option>
                    <option value="09:15">09:15</option>
                    <option value="09:30">09:30</option>
                    <option value="09:45">09:45</option>
                    <option value="10:00">10:00</option>
                    <option value="10:15">10:15</option>
                    <option value="10:30">10:30</option>
                    <option value="10:45">10:45</option>
                    <option value="11:00">11:00</option>
                    <option value="11:15">11:15</option>
                    <option value="11:30">11:30</option>
                    <option value="11:45">11:45</option>
                    <option value="11:45">14:00</option>
                    <option value="14:15">14:15</option>
                    <option value="14:30">14:30</option>
                    <option value="14:45">14:45</option>
                    <option value="15:00">15:00</option>
                    <option value="15:15">15:15</option>
                    <option value="15:30">15:30</option>
                    <option value="15:45">15:45</option>
                    <option value="16:00">16:00</option>
                    <option value="16:15">16:15</option>
                    <option value="16:30">16:30</option>
                    <option value="16:45">16:45</option>
                    <option value="17:00">17:00</option>
                    <option value="17:15">17:15</option>
                    <option value="17:30">17:30</option>
                    <option value="17:45">17:45</option>
                </select>

                <select name="idConvenio" id="idConvenio" class="box" required>
                    <option value="" selected>Selecione o Convênio...</option>
                    <?php
                    $query = "SELECT * FROM ifsp_lacif.convenios ORDER BY idConvenio";
                    $resultado = mysqli_query($conn, $query);
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <option value="<?php echo $linha['nomeConvenio'];?>"><?php echo $linha['nomeConvenio'];?></option>
                        <?php
                    }
                    ?>
                </select>

                <?php
                $result = mysqli_query($conn, "SELECT * FROM ifsp_lacif.convenios WHERE idConvenio");
                $sdda = mysqli_fetch_assoc($result);?>
                <input type="text" id="porcentagem" name="porcentagem" placeholder="" value="<?php echo $sdda['porcentagem']?>" class="box" disabled>


                <input type="text"              id="celular"       name="celular"      placeholder="Digite Numero de Contato"  class="box" required>
                <input type="text"              id="cpf"           name="cpf"          placeholder="Digite o CPF"              class="box" required>
                <select name="idTipoExame" id="idTipoExame" class="box" required>
                    <option value="" selected>Selecione o Tipo de Exame...</option>
                    <?php
                    $query = "SELECT * FROM ifsp_lacif.exames ORDER BY idTipoExame";
                    $resultado = mysqli_query($conn, $query);
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        ?>
                        <option value="<?php echo $linha['nomeExame'];?>"><?php echo $linha['nomeExame'];?></option>
                        <?php
                    }
                    ?>
                </select>

                <?php
                $result = mysqli_query($conn, "SELECT * FROM ifsp_lacif.exames WHERE idTipoExame");
                $sdda = mysqli_fetch_assoc($result);?>
                <input type="text" id="valor" name="valor" placeholder="" class="box" disabled>

                <input type="button"  name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='lacif_home.php'" value="Voltar">
                <input type="submit" name="agendar" class="btn btn-danger" value="agendar"/>

            </form>

        </div>

    </section>



    <!-- ARQUIVOS JAVA SCRIPT -->
    <script src="js/validar.js"></script>

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

            $('#start').attr('min', maxDate);
            $('#horario').attr('min', maxDate);

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

    <script type="text/javascript">
        $(document).ready(function() {


            $("#idConvenio").change(()=>{
                let conv = $("#idConvenio").val();
                $("#porcentagem").val("Requisitando dados...");
                $.get("getPercentByConvenio.php?idConvenio="+conv, function(data, status){
                    let dados = JSON.parse(data);

                    $("#porcentagem").val(dados[0].porcentagem)
                });
            })
            $("#idTipoExame").change(()=>{
                let conv = $("#idTipoExame").val();

                $.get("getValorByExame.php?idTipoExame="+conv, function(data, status){
                    let dados = JSON.parse(data);

                    $("#valor").val(dados[0].valor)
                });
            })


        });
    </script>

    </body>
    </html>


<?php

if (isset($_POST['agendar'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $horario = $_POST['horario'];
    $idConvenio = $_POST['idConvenio'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $idTipoExame = $_POST['idTipoExame'];

//    $IniciodataBrasil = implode('-', array_reverse(explode('/', $start)));
//    $FimdataBrasil = implode('-', array_reverse(explode('/', $horario)));

    // Fazer o insert  no banco de dados
    $query = "SELECT cons.* FROM ifsp_lacif.consultas cons 
    WHERE cons.start = '$start' 
    AND cons.horario = '$horario' ";
    $row = mysqli_query($conn, $query);

    if(mysqli_num_rows($row) > 0)
    {
        echo "<script type='text/javascript'>OpcaoMensagens(4);</script>";
    } else
    {
        $result = "INSERT INTO ifsp_lacif.consultas 
            (title, description, start, horario, idconvenio, celular, cpf, idTipoExame) 
            VALUES ('$title', '$description', '$start', '$horario', '$idConvenio', '$celular', '$cpf', '$idTipoExame')";

        $row = mysqli_query($conn, $result);
        echo "<script type='text/javascript'>OpcaoMensagens(1);</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=lacif_home.php">';

    }
}
?>