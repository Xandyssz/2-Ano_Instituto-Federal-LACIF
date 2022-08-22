<!-- Page Content  -->
<div id="content">

    <div class="top-navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                    <span class="material-icons">arrow_back_ios</span>
                </button>

                <a class="navbar-brand" href="#"> Dashboard </a>
                <div class="menuzinho">

                    <ul class="language">
                        <?php
                        if ($exibirTipodeAcesso == "Administrador"){

                            ?>

                            <li><a href="exames.php">Meus Exames</a></li>
                            <li><a href="PainelAdmin.php">Gerenciar Consulta</a></li>
                            <li><a href="CrudUsuarioListar.php">Gerenciar Usuarios</a></li>
                            <li><a href="sair.php">Sair</a></li>
                            <li><a><?php echo "Acesso:" . $exibirTipodeAcesso ?></a></li>



                            <?php
                        }
                        ?>
                        <li><a href="sair.php">Sair</a></li>

                    </ul>

                <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="material-icons">more_vert</span>
                </button>

                <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">

                </div>
            </div>
        </nav>
    </div>
