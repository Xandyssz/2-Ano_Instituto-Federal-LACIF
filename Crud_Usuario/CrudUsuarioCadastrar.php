<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registrar-se </title>

    <link rel="stylesheet" href="../css/tabelacss.css">
</head>
<body>

<section class="book" id="book">

    <h1 class="heading"> <span>REALIZAR</span>-CADASTRO</h1>

    <div class="row">

        <div class="image">
            <img src="../images/book2-img.svg" alt="">
        </div>

        <form action="CrudUsuarioListar.php" method="POST">
            <h3>Cadastro</h3>
            <input type="text"  id="nome" name="nome" placeholder="Digite o Nome Completo" class="box">
            <input type="email"  name="email" placeholder="Digite o email" class="box">
            <input type="number" name="cpf"  placeholder="Digite o CPF" class="box">
            <input type="password"  name="password" placeholder="Digite a senha" class="box">
            <input type="date"  name="data_cons" class="box">
            <input type="number" name="celular" placeholder="Digite Numero de Contato" class="box">
            <input type="text" name="endereco" placeholder="Digite o endereco" class="box">
            <select name="nivelAcesso" class="box" >
                <option value="Paciente"selected>Paciente</option>
            </select>

            <input type="submit" name="cadastrar" class="btn btn-danger" value="Cadastrar"/>

        </form>
    </div>

</section>
</body>
</html>