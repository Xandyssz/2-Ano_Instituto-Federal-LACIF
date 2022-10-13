<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LACIF - Login </title>

    <!-- ARQUIVOS FAVICON -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="css/tabelacss.css">
</head>
<body>

<section class="book" id="book">

    <h1 class="heading"><span>REALIZAR</span>-LOGIN</h1>

    <div class="row">
        <div class="image">
            <img src="img/images/book2-img.svg" alt="">
        </div>
        <form class="user" action="Autenticador.php" method="post">
            <h3>LOGIN</h3>
            <input type="text" name="email" id="email" placeholder="Digite o Email" class="box" required>
            <input type="password" name="senha" id="senha" placeholder="Digite a senha" class="box" required>
            <div class="form-group">
                <button type="submit" name="login" id="login" class="btn btn-primary btn-user btn-block">Conecte-se
                </button>
                <input type="button" name="Registrar-se" class="btn btn-info" value="Registrar-se"
                       onclick="window.location.href='CrudUsuarioCadastrar.php'"/>
                <input type="button" name="cancelar" id="cancelar" class="btn btn-danger" onclick="location.href='lacif_index.php'" value="Voltar">

            </div>
        </form>
    </div>

</section>
</body>
</html>