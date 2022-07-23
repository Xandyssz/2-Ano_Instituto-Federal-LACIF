<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LACIF | Login </title>

    <link rel="stylesheet" href="css/tabelacss.css">
</head>
<body>

<section class="book" id="book">

    <h1 class="heading"> <span>REALIZAR</span>-LOGIN</h1>

    <div class="row">
        <div class="image">
            <img src="images/book2-img.svg" alt="">
        </div>
        <form class="user" method="post" action="AutenticadorLogin/Autenticador_Paciente.php">
            <h3>LOGIN</h3>
            <input type="number" name="cpf"  placeholder="Digite o CPF" class="box" required>
            <input type="password"  name="password" placeholder="Digite a senha" class="box" required>
            <select name="nivelAcesso" class="box" >
                <option value="Paciente">Paciente</option>
                <option value="Recepcionista">Recepcionista</option>
                <option value="Doutor">Doutor</option>
            </select>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block">Conecte-se</button>
                <input type="button" name="Registrar-se" class="btn btn-info" value="Registrar-se" onclick="window.location.href='Crud_Usuario/CrudUsuarioCadastrar.php'"/>
            </div>
        </form>
    </div>

</section>
</body>
</html>