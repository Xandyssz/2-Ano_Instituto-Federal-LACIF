<?php
session_start();
include_once('sessao.php');
include_once('conexao.php');

$id = $_GET['id'];

if ($id > 0) {
    $query = "SELECT * FROM ifsp_lacif.usuarios WHERE idusuario = $id";
    $dados = mysqli_query($conn, $query);
    $linhaUnica = mysqli_fetch_assoc($dados);
} else {
    echo "<script>OpcaoMensagens(5);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudUsuarioListar.php">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/funcoes.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title> LACIF </title>

    <link rel="stylesheet" href="css/tabelacss.css">
</head>
<body>

<section class="book" id="book">

    <h1 class="heading"> <span>ALTERAÇÃO DE CADASTRO</span></h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="#" method="POST">
            <h3>Alterar Cadastro</h3>
            <input type="text"  name="nome" id="nome" placeholder="Digite o Nome Completo" class="box" value="<?php echo $linhaUnica['nome']?>">
            <input type="number" name="cpf"  id="cpf" placeholder="Digite o CPF" class="box"  value="<?php echo $linhaUnica['cpf']?>">
            <input type="email"  name="email" id="email" placeholder="Digite o email" class="box" value="<?php echo $linhaUnica['email']?>">
            <input type="password"  name="senha" id="senha" placeholder="Digite a senha" class="box" value="<?php echo $linhaUnica['senha']?>">
            <input type="number" name="celular" id="celular" placeholder="Digite Numero de Contato" class="box" value="<?php echo $linhaUnica['celular']?>">
            <input type="text" name="endereco" id="endereco" placeholder="Digite o endereco" class="box" value="<?php echo $linhaUnica['endereco']?>">
            <input type="date"  name="datanasc" id="datanasc" class="box" value="<?php echo $linhaUnica['datanasc']?>">

            <select name="nivelAcesso" id="nivelAcesso" class="box" value="<?php echo $linhaUnica['nivelAcesso']?>">
                <option value="" selected>Selecione...</option>
                <?php
                if ($linhaUnica['nivelAcesso'] == $linhaUnica['nivelAcesso']) {
                    ?>
                    <option value="<?php echo $linhaUnica['nivelAcesso'];?>" selected>
                        <?php echo $linhaUnica['nivelAcesso'];?>
                        <?php echo $linhaUnica['nivelAcesso'] == 'Administrador';?>
                    </option>

                    <?php
                }
                ?>
            </select>

            <input type="submit" id="alterar" name="alterar" class="btn btn-primary pull-right" value="alterar">
        </form>
        <script src="js/formulario.js"></script>
</section>
</body>
</html>

<?php
//se ele clicou no botão alterar
if (isset($_POST['alterar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $datanasc = $_POST['datanasc'];
    $nivelAcesso = $_POST['nivelAcesso'];

//    $nivelAcesso = $_POST['nivelAcesso'];


//Fazer o update no banco de dados

$result = "UPDATE ifsp_lacif.usuarios 
SET nome = '$nome', 
    email = '$email',
    cpf = '$cpf', 
    senha = '$senha', 
    celular = '$celular', 
    endereco = '$endereco', 
    datanasc = '$datanasc', 
    nivelAcesso = '$nivelAcesso' 
WHERE idusuario = $id";

    $row = mysqli_query($conn, $result);
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudUsuarioListar.php">';
}
?>


