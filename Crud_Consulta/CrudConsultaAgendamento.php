<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LACIF </title>

    <link rel="stylesheet" href="../css/tabelacss.css">
</head>
<body>

<section class="book" id="book">

    <h1 class="heading"> <span>Agende</span> Agora </h1>

    <div class="row">

        <div class="image">
            <img src="../images/book-img.svg" alt="">
        </div>

        <form action="CrudConsultaListar.php" method="POST">
            <h3>Agende sua consulta</h3>
            <input type="text"  id="nome" name="nome" placeholder="Digite o Nome Completo" class="box">
            <input type="number" name="cpf"  placeholder="Digite o CPF" class="box">
            <input type="number" name="celular" placeholder="Digite Numero de Contato" class="box">
            <input type="text" name="convenio" placeholder="Digite o Convenio" class="box">
            <input type="date"  name="data_cons" class="box">
            <input type="time"  name="horario_cons" class="box">

            <select name="tiposanguineo" class="box">
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

            <select name="sexo" class="box">
                <option value="" selected>Selecione o sexo...</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>

            <select name="tipo" class="box">
                <option value="" selected>Selecione o Tipo do exame...</option>
                <option value="Covid19">Covid 19 </option>
                <option value="CheckuP">Check-Up</option>
                <option value="Sangue">Sangue</option>
                <option value="Fezes">Fezes</option>
            </select>

            <input type="submit" name="agendar" class="btn btn-danger" value="Agendar"/>
        </form>

    </div>

</section>
        <script src="../js/validar.js"></script>
</body>
</html>