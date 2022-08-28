<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

$idconsulta = $_GET['id'];

if ($idconsulta > 0) {
    $query = "SELECT * FROM ifsp_lacif.consultas WHERE idconsulta = $idconsulta";
    $dados = mysqli_query($conn, $query);
    $linhaUnica = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudConsultaListar.php">';
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> LACIF </title>

        <!-- ARQUIVOS CSS -->
        <link rel="stylesheet" href="css/tabelacss.css">


        <!-- ARQUIVOS JAVA SCRIPT -->
        <script src="js/funcoes.js"></script>

    </head>
    <body>

    <section class="book" id="book">

        <h1 class="heading"> <span>ALTERAÇÃO</span></h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="CrudConsultaListar.php" method="POST">
                <h3>Agende sua consulta</h3>
                <input type="text"  id="nome" name="nome" placeholder="Digite o Nome Completo" class="box" value="<?php echo $linhaUnica['nome']?>">
                <input type="number" name="cpf"  placeholder="Digite o CPF" class="box" value="<?php echo $linhaUnica['cpf']?>">
                <input type="number" name="celular" placeholder="Digite Numero de Contato" class="box" value="<?php echo $linhaUnica['celular']?>">
                <input type="text" name="convenio" placeholder="Digite o Convenio" class="box" value="<?php echo $linhaUnica['convenio']?>">
                <input type="date"  name="data_cons" class="box" value="<?php echo $linhaUnica['data_cons']?>">
                <input type="time"  name="horario_cons" class="box" value="<?php echo $linhaUnica['horario_cons']?>">

                <select name="tiposanguineo" class="box" value="<?php echo $linhaUnica['tiposanguineo']; ?>">
                    <?php
                    if ($linhaUnica['tiposanguineo'] == "O-") {
                        ?>
                        <option value="O-"selected>O-</option>
                        <option value="O">O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B">B+</option>
                        <option value="A-">A-</option>
                        <option value="A">A+</option>

                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "O") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O"selected>O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B">B+</option>
                        <option value="A-">A-</option>
                        <option value="A">A+</option>

                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "AB-") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O">O+</option>
                        <option value="AB-"selected>AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B">B+</option>
                        <option value="A-">A-</option>
                        <option value="A">A+</option>

                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "AB") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O">O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB"selected>AB+</option>
                        <option value="B-">B-</option>
                        <option value="B">B+</option>
                        <option value="A-">A-</option>
                        <option value="A">A+</option>


                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "B-") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O">O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-"selected>B-</option>
                        <option value="B">B+</option>
                        <option value="A-">A-</option>
                        <option value="A">A+</option>

                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "B") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O">O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B"selected>B+</option>
                        <option value="A-">A-</option>
                        <option value="A">A+</option>

                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "A-") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O">O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B">B+</option>
                        <option value="A-"selected>A-</option>
                        <option value="A">A+</option>

                        <?php
                    } elseif ($linhaUnica['tiposanguineo'] == "A") {
                        ?>
                        <option value="O-">O-</option>
                        <option value="O">O+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B">B+</option>
                        <option value="A-">A-</option>
                        <option value="A"selected>A+</option>

                        <?php
                    }

                    ?>
                </select>


                <select name="sexo" class="box" value="<?php echo $linhaUnica['sexo'] ?>">
                    <?php
                    if ($linhaUnica['sexo'] == "Masculino") {
                        ?>
                        <option value="">Selecione...</option>
                        <option value="Masculino" selected>Masculino</option>
                        <option value="Feminino">Feminino</option>

                        <?php
                    } elseif ($linhaUnica['sexo'] == "Feminino") {
                        ?>
                        <option value="">Selecione...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino" selected>Feminino</option>
                        <?php
                    }

                    ?>
                </select>


                <select name="tipo" class="box" value="<?php echo $linhaUnica['tipo']; ?>">
                    <?php
                    if ($linhaUnica['tipo'] == "Covid19") {
                        ?>
                        <option value="">Selecione o Tipo do exame...</option>
                        <option value="Covid19"selected>Covid 19 </option>
                        <option value="CheckuP">Check-Up</option>
                        <option value="Sangue">Sangue</option>
                        <option value="Fezes">Fezes</option>

                        <?php
                    } elseif ($linhaUnica['tipo'] == "CheckuP") {
                        ?>
                        <option value="">Selecione o Tipo do exame...</option>
                        <option value="Covid19">Covid 19 </option>
                        <option value="CheckuP"selected>Check-Up</option>
                        <option value="Sangue">Sangue</option>
                        <option value="Fezes">Fezes</option>

                        <?php
                    } elseif ($linhaUnica['tipo'] == "Sangue") {
                        ?>
                        <option value="">Selecione o Tipo do exame...</option>
                        <option value="Covid19">Covid 19 </option>
                        <option value="CheckuP">Check-Up</option>
                        <option value="Sangue"selected>Sangue</option>
                        <option value="Fezes">Fezes</option>

                        <?php
                    } elseif ($linhaUnica['tipo'] == "Fezes") {
                        ?>
                        <option value="">Selecione o Tipo do exame...</option>
                        <option value="Covid19">Covid 19 </option>
                        <option value="CheckuP">Check-Up</option>
                        <option value="Sangue">Sangue</option>
                        <option value="Fezes"selected>Fezes</option>

                        <?php
                    }
                    ?>
                </select>



                <select name="status" class="box" value="<?php echo $linhaUnica['status']; ?>">

                    <?php
                    if ($linhaUnica['status'] == "Pendente") {
                        ?>
                        <option value="Pendente"selected>Pendente</option>
                        <option value="Finalizado">Finalizado</option>

                        <?php
                    }
                    elseif ($linhaUnica['status'] == "Finalizado") {
                        ?>
                        <option value="Pendente">Pendente</option>
                        <option value="Finalizado"selected>Finalizado</option>
                        <?php
                    }
                    ?>
                </select>

                <input type="submit" id="alterar" name="alterar" class="btn btn-primary pull-right" value="alterar">
            </form>

            <!-- ARQUIVOS JAVA SCRIPT -->
            <script src="js/formulario.js"></script>
    </section>
    </body>
    </html>

<?php
if(isset($_GET['alterar'])){
    $nome           = $_GET['nome'];
    $cpf            = $_GET['cpf'];
    $celular        = $_GET['celular'];
    $convenio       = $_GET['convenio'];
    $data_cons      = $_GET['data_cons'];
    $horario_cons   = $_GET['horario_cons'];
    $tiposanguineo  = $_GET['tiposanguineo'];
    $sexo           = $_GET['sexo'];
    $tipo           = $_GET['tipo'];
    $status         = $_GET['status'];

//Fazer o update no banco de dados

    $result = "UPDATE ifsp_lacif.consultas 
SET nome = '$nome', 
    cpf = '$cpf', 
    celular = '$celular', 
    convenio = '$convenio', 
    data_cons = '$data_cons', 
    horario_cons = '$horario_cons', 
    tiposanguineo = '$tiposanguineo'
    sexo = '$sexo', 
    tipo = '$tipo', 
    status = '$status', 
    WHERE idconsulta = $idconsulta";

    $row = mysqli_query($conn, $result);
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudConsultaListar.php">';

}

?>