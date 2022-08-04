<header>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5"></div>
                <!-- end col-3 -->
                <div class="col-md-6 col-sm-5 hidden-xs">
                    <!-- end form -->
                </div>
                <!-- end col-6 -->
                <?php
                if ($exibirTipodeAcesso == "Administrador"){

                ?>
                <div class="menuzinho">
                    <ul class="language">
                        <li><a href="PacienteAutenticado/exames.php">Meus Exames</a></li>
                        <li><a href="Crud_Consulta/CrudConsultaAgendamento.php">Agendar Consulta</a></li>
                        <li><a href="Crud_Usuario/CrudUsuarioListar.php">Gerenciar Usuarios</a></li>
                        <li><a><?php echo "CPF DA SESSSÃO:" . $_SESSION['cpf'] ?></a></li>

                        <?php
                        } elseif($exibirTipodeAcesso == "Paciente"){
                            ?>
                            <li class="nav-item"><a href="#" class="nav-link">Funções Básicas do Cliente</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Funções Fundamentais do Cliente</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Funções de Saídas do Cliente</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">teste stes testeCliente</a></li>

                            <?php
                        } elseif ($exibirTipodeAcesso == "Recepcionista"){
                            ?>
                            <li class="nav-item"><a href="#" class="nav-link">Funções Básicas do Vendedor</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Funções  do Vendedor</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Funções de VENDdor do Vendedor</a></li>
                            <?php
                        }
                        ?>

                        <li><a href="sair.php" class="nav-link"><i class="fa fa-sign-out fa-1x"></i> Sair</a></li>


                    </ul>
                    <!-- end language -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->



    <!-- Inicio Menu -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Image"></a> </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">
                <form class="visible-xs">
                    <label>
                        <input type="text" placeholder="Type a word to find">
                    </label>
                    <input type="submit" value="SEARCH">
                </form>
                <!-- end form -->
                <ul class="social-media hidden-sm">
                    <li><a href="https://www.instagram.com/xanddy._/"><i class="ion-social-instagram-outline"></i></a></li>
                    <li><a href="https://twitter.com/xandyszz"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="https://github.com/Xandyssz"><i class="ion-social-github"></i></a></li>
                </ul>
                <!-- end social-media -->

                <ul class="nav navbar-nav">

                    <li><a href="index.php">Home</a></li>

                    <li><a href="#">Exames</a>
                        <ul><!-- menu suspenso dentro do menu original-->
                            <li><a href="AnaliseClinica.php">Análises Clínicas</a></li>
                        </ul>
                        <!-- end dropdown -->
                    </li>

                    <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact-us.php">Contato</a></li>
                </ul>
                <!-- FINAL MENU -->
                <!-- end nav -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
</header>