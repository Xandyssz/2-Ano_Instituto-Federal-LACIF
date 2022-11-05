<?php
session_start();
//verifica se tem sessão e se está tudo ok!
include_once('sessao.php');
//chama a conecao com banco de dados
include_once('conexao.php');

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["tipo_acesso"]))
{
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}

$id = $_GET['id'];

if ($id > 0) {
    $query = "SELECT * FROM ifsp_lacif.consultas WHERE id = $id";
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

    <!-- ARQUIVOS FAVICON -->
    <link href="../../ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../../ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../../ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../../ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="../../ico/favicon.png" rel="shortcut icon">

    <!-- TITULO DA PAGINA-->
    <title> LACIF - Editar Consulta</title>

    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="../../css/tabelacss.css">

    <!-- ARQUIVOS JAVA SCRIPT-->
    <script src="../../js/funcoes.js"></script>

</head>
<body>

<section class="book" id="book">
    <h1 class="heading"> <span>ALTERAÇÃO DE AGENDAMENTO</span></h1>

    <div class="row">

        <div class="image">
            <img src="../../img/images/book-img.svg" alt="">
        </div>

        <form action="#" method="POST">
            <h3>Alterar Agendamento</h3>
            <input type="text"              id="title"         name="title"         placeholder="Digite o Nome Completo"   class="box" value="<?php echo $linhaUnica['title']?>">
            <input type="text"              id="description"   name="description"   placeholder="Digite a Descricao"        class="box" value="<?php echo $linhaUnica['description']?>">
            <input type="date"              id="start"         name="start"                                                class="box" value="<?php echo $linhaUnica['start']?>">
            <input type="date"              id="end"           name="end"                                                  class="box" value="<?php echo $linhaUnica['end']?>">
            <input type="text"              id="convenio"      name="convenio"     placeholder="Digite o Convenio"         class="box" value="<?php echo $linhaUnica['convenio']?>">
            <input type="text"              id="celular"       name="celular"      placeholder="Digite Numero de Contato"  class="box" value="<?php echo $linhaUnica['celular']?>">
            <input type="text"              id="cpf"           name="cpf"          placeholder="Digite o CPF"              class="box" value="<?php echo $linhaUnica['cpf']?>">

            <select  name="tiposanguineo"   id="tiposanguineo" class="box" value="<?php echo $linhaUnica['tiposanguineo']?>">
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
                }
                elseif ($linhaUnica['tiposanguineo'] == "O") {
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

            <select  name="tipo" id="tipo" class="box" value="<?php echo $linhaUnica['tipo']?>">
                <?php
                if ($linhaUnica['tipo'] == "Covid19") {
                    ?>
                    <option value="Covid19"selected>Covid 19 </option>
                    <option value="CheckuP">Check-Up</option>
                    <option value="Sangue">Sangue</option>
                    <option value="Fezes">Fezes</option>
                    <?php
                }
                elseif ($linhaUnica['tipo'] == "CheckuP") {
                    ?>
                    <option value="Covid19">Covid 19 </option>
                    <option value="CheckuP"selected>Check-Up</option>
                    <option value="Sangue">Sangue</option>
                    <option value="Fezes">Fezes</option>
                    <?php
                } elseif ($linhaUnica['tipo'] == "Sangue") {
                    ?>
                    <option value="Covid19">Covid 19 </option>
                    <option value="CheckuP">Check-Up</option>
                    <option value="Sangue"selected>Sangue</option>
                    <option value="Fezes">Fezes</option>
                    <?php
                } elseif ($linhaUnica['tipo'] == "Fezes") {
                    ?>
                    <option value="Covid19">Covid 19 </option>
                    <option value="CheckuP">Check-Up</option>
                    <option value="Sangue">Sangue</option>
                    <option value="Fezes"selected>Fezes</option>
                    <?php
                }
                ?>
            </select>

            <select  name="sexo" id="sexo" class="box" value="<?php echo $linhaUnica['sexo']?>">
                <?php
                if ($linhaUnica['sexo'] == "Masculino") {
                    ?>
                    <option value="Masculino"selected>Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <?php
                }
                elseif ($linhaUnica['sexo'] == "Feminino") {
                    ?>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino"selected>Feminino</option>
                    <?php
                }
                ?>
            </select>

            <select  name="status" id="status" class="box" value="<?php echo $linhaUnica['status']?>">
                <?php
                if ($linhaUnica['status'] == "Pendente") {
                    ?>
                    <option value="Pendente"selected>Pendente</option>
                    <option value="Analise">Sobre Análise</option>
                    <option value="Finalizado">Finalizado</option>
                    <?php
                }
                elseif ($linhaUnica['status'] == "Analise") {
                    ?>
                    <option value="Pendente">Pendente</option>
                    <option value="Analise"selected>Sobre Análise</option>
                    <option value="Finalizado">Finalizado</option>
                    <?php
                } elseif ($linhaUnica['status'] == "Finalizado") {
                    ?>
                    <option value="Pendente">Pendente</option>
                    <option value="Analise">Sobre Análise</option>
                    <option value="Finalizado"selected>Finalizado</option>
                    <?php
                }
                ?>
            </select>



            <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='CrudConsultaListar.php'" value="Voltar">
            <input type="submit" id="alterar" name="alterar" class="btn btn-primary pull-right" value="alterar">
        </form>
        <script src="../../js/formulario.js"></script>

        <!-- FORMATAR (TELEFONE FIXO, TELEFONE CELULAR, CEP, CNPJ, CPF E DATA) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script>
            $("#celular").mask("(99) 99999-9999");
            $("#cpf").mask("999.999.999-99");
        </script>

</section>
</body>
</html>


<?php
//se ele clicou no botão alterar
if (isset($_POST['alterar'])) {
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
    $status = $_POST['status'];

    //Fazer o update no banco de dados


//Fazer o update no banco de dados

    $result = "UPDATE ifsp_lacif.consultas 
    SET title = '$title',
    description = '$description',
    start = '$start',
    horario = '$end',
    convenio = '$convenio',
    celular = '$celular',
    cpf = '$cpf',
    tiposanguineo = '$tiposanguineo',
    tipo = '$tipo',
    sexo = '$sexo',
    status = '$status'
        WHERE id = $id";

    $row = mysqli_query($conn, $result);
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudConsultaListar.php">';
}
?>





