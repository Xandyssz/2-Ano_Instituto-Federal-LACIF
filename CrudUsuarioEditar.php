<?php
session_start();
include_once('sessao.php');//verifica se tem sessão e se está tudo ok!
//chama a conecao com banco de dados
include_once('conexao.php');

// Verifica se existe os dados da sessão de login
if (!isset($_SESSION["tipo_acesso"])) {
// Usuário não logado! Redireciona para a página de login
    header("location: lacif_index.php");
}


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

    <!-- ARQUIVOS FAVICON -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- TITULO DA PAGINA-->
    <title> LACIF - Editar Usuario</title>

    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="css/tabelacss.css">

    <!-- ARQUIVOS JAVA SCRIPT-->
    <script src="js/funcoes.js"></script>

</head>
<body>

<section class="book" id="book">
    <h1 class="heading"> <span>ALTERAÇÃO DE CADASTRO</span></h1>

    <div class="row">

        <div class="image">
            <img src="img/images/book-img.svg" alt="">
        </div>

        <form action="#" method="POST">
            <h3>Alterar Cadastro</h3>
            <input type="text"  name="nome" id="nome" placeholder="Digite o Nome Completo" class="box" value="<?php echo $linhaUnica['nome']?>">
            <input type="text" name="cpf"  id="cpf" placeholder="Digite o CPF" class="box"  value="<?php echo $linhaUnica['cpf']?>">
            <input type="email"  name="email" id="email" placeholder="Digite o email" class="box" value="<?php echo $linhaUnica['email']?>">
            <input type="password"  name="senha" id="senha" placeholder="Digite a senha" class="box">
            <input type="text" name="celular" id="celular" placeholder="Digite Numero de Contato" class="box" value="<?php echo $linhaUnica['celular']?>">
            <input type="text" name="endereco" id="endereco" placeholder="Digite o endereco" class="box" value="<?php echo $linhaUnica['endereco']?>">
            <input type="date"  name="datanasc" id="datanasc" class="box" value="<?php echo $linhaUnica['datanasc']?>">



            <select name="tipo_acesso" name="tipo_acesso" id="tipo_acesso" class="box" value="<?php echo $linhaUnica['tipo_acesso']; ?>">

                <?php
                if ($linhaUnica['tipo_acesso'] == "Paciente") {
                    ?>
                    <option value="Paciente"selected>Paciente</option>
                    <option value="Laboratorista">Laboratorista</option>
                    <option value="Administrador">Administrador</option>


                    <?php
                }
                elseif ($linhaUnica['tipo_acesso'] == "Laboratorista") {
                    ?>
                    <option value="Paciente">Paciente</option>
                    <option value="Laboratorista"selected>Laboratorista</option>
                    <option value="Administrador">Administrador</option>

                    <?php
                } elseif ($linhaUnica['tipo_acesso'] == "Administrador") {
                    ?>
                    <option value="Paciente">Paciente</option>
                    <option value="Laboratorista">Laboratorista</option>
                    <option value="Administrador"selected>Administrador</option>
                    <?php
                }
                ?>
            </select>

            <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='CrudUsuarioListar.php'" value="Voltar">
            <input type="submit" id="alterar" name="alterar" class="btn btn-primary pull-right" value="alterar">

        </form>
        <script src="js/formulario.js"></script>
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
    $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $datanasc = $_POST['datanasc'];
    $tipo_acesso = $_POST['tipo_acesso'];

//    $nivelAcesso = $_POST['nivelAcesso'];


//Fazer o update no banco de dados

$result = "UPDATE ifsp_lacif.usuarios 
SET nome = '$nome', 
    email = '$email',
    cpf = '$cpf', 
    senha = '$senhaCript', 
    celular = '$celular', 
    endereco = '$endereco', 
    datanasc = '$datanasc', 
    tipo_acesso = '$tipo_acesso' 
WHERE idusuario = $id";

    $row = mysqli_query($conn, $result);
    echo "<script type='text/javascript'>OpcaoMensagens(2);</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=CrudUsuarioListar.php">';
}
?>


