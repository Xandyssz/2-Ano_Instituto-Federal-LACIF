<?php
//Aqui vai código PHP
if(isset($_GET['id'])){
    $id         = $_GET['id'];
    $nome       = $_GET['nome'];
    $email       = $_GET['email'];
    $cpf        = $_GET['cpf'];
    $senha   = $_GET['senha'];
    $data_usa   = $_GET['data_usa'];
    $celular    = $_GET['celular'];
    $endereco   = $_GET['endereco'];
    $nivelAcesso = $_GET['nivelAcesso'];
}

?>

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

    <h1 class="heading"> <span>ALTERAÇÃO DE CADASTRO</span></h1>

    <div class="row">

        <div class="image">
            <img src="../images/book-img.svg" alt="">
        </div>

        <form action="../CrudUsuarioListar.php" method="POST">
            <h3>Alterar Cadastro</h3>
            <input type="text"  id="nome" name="nome" placeholder="Digite o Nome Completo" class="box" value="<?php echo $nome ?>">

            <input type="email"  name="email" placeholder="Digite o email" class="box" value="<?php echo $email ?>">

            <input type="number" name="cpf"  placeholder="Digite o CPF" class="box" value="<?php echo $cpf ?>">

            <input type="password"  name="senha" placeholder="Digite a senha" class="box" value="<?php echo $senha ?>">

            <input type="date"  name="data_cons" class="box" value="<?php echo $data_usa ?>">

            <input type="number" name="celular" placeholder="Digite Numero de Contato" class="box" value="<?php echo $celular ?>">

            <input type="text" name="endereco" placeholder="Digite o endereco" class="box" value="<?php echo $endereco ?>">



            <input type="submit" name="Atualizar" class="btn btn-danger" value="Atualizar" onclick="window.location.href='CrudUsuarioListar.php'"/>
        </form>
    </div>

</section>
</body>
</html>