<?php
//Aqui vai código PHP
if(isset($_GET['id'])){
    $id         = $_GET['id'];
    $nome       = $_GET['nome'];
    $cpf        = $_GET['cpf'];
    $celular    = $_GET['celular'];
    $convenio   = $_GET['convenio'];
    $tipo         = $_GET['tipo'];
    $sexo         = $_GET['sexo'];
    $status       = $_GET['status'];
    $data_usa   = $_GET['data_usa'];
    $horario_cons = $_GET['horario_cons'];
    $tiposanguineo = $_GET['tiposanguineo'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LACIF </title>

    <link rel="stylesheet" href="css/tabelacss.css">
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
            <input type="text"  id="nome" name="nome" placeholder="Digite o Nome Completo" class="box" value="<?php echo $nome;?>">
            <input type="number" name="cpf"  placeholder="Digite o CPF" class="box" value="<?php echo $cpf;?>">
            <input type="number" name="celular" placeholder="Digite Numero de Contato" class="box" value="<?php echo $celular;?>">
            <input type="text" name="convenio" placeholder="Digite o Convenio" class="box" value="<?php echo $convenio;?>">
            <input type="date"  name="data_cons" class="box" value="<?php echo $data_usa;?>">
            <input type="time"  name="horario_cons" class="box" value="<?php echo $horario_cons;?>">

            <select name="tiposanguineo" class="box" value="<?php echo $tiposanguineo; ?>">
                <?php
                if ($tiposanguineo == "O-") {
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
                } elseif ($tiposanguineo == "O") {
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
                } elseif ($tiposanguineo == "AB-") {
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
                } elseif ($tiposanguineo == "AB") {
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
                } elseif ($tiposanguineo == "B-") {
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
                } elseif ($tiposanguineo == "B") {
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
                } elseif ($tiposanguineo == "A-") {
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
                } elseif ($tiposanguineo == "A") {
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

            <select name="sexo" class="box" value="<?php echo $sexo; ?>">
                <?php
                if ($sexo == "Masculino") {
                    ?>
                    <option value="">Selecione...</option>
                    <option value="Masculino" selected>Masculino</option>
                    <option value="Feminino">Feminino</option>

                    <?php
                } elseif ($sexo == "Feminino") {
                    ?>
                    <option value="">Selecione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino" selected>Feminino</option>
                    <?php
                }

                ?>
            </select>

            <select name="tipo" class="box" value="<?php echo $tipo; ?>">
                <?php
                if ($tipo == "Covid19") {
                    ?>
                    <option value="">Selecione o Tipo do exame...</option>
                    <option value="Covid19"selected>Covid 19 </option>
                    <option value="CheckuP">Check-Up</option>
                    <option value="Sangue">Sangue</option>
                    <option value="Fezes">Fezes</option>

                    <?php
                } elseif ($tipo == "CheckuP") {
                    ?>
                    <option value="">Selecione o Tipo do exame...</option>
                    <option value="Covid19">Covid 19 </option>
                    <option value="CheckuP"selected>Check-Up</option>
                    <option value="Sangue">Sangue</option>
                    <option value="Fezes">Fezes</option>

                    <?php
                    } elseif ($tipo == "Sangue") {
                    ?>
                    <option value="">Selecione o Tipo do exame...</option>
                    <option value="Covid19">Covid 19 </option>
                    <option value="CheckuP">Check-Up</option>
                    <option value="Sangue"selected>Sangue</option>
                    <option value="Fezes">Fezes</option>

                    <?php
                    } elseif ($tipo == "Fezes") {
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

            <select name="status" class="box" value="<?php echo $status; ?>">
                <?php
                if ($status == "Pendente") {
                    ?>
                    <option value="Pendente"selected>Pendente</option>
                    <option value="Finalizado">Finalizado</option>

                    <?php
                }
                elseif ($status == "Finalizado") {
                    ?>
                    <option value="Pendente">Pendente</option>
                    <option value="Finalizado"selected>Finalizado</option>
                    <?php
                }
                ?>



                <input type="submit" name="Atualizar" class="btn btn-danger" value="Atualizar" onclick="window.location.href='CrudListar.php'"/>
        </form>
    </div>

</section>
</body>
</html>