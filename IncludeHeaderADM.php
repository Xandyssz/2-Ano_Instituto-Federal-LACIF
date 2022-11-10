<header>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5"></div>
                <div class="col-md-6 col-sm-5 hidden-xs">

                </div>

                <div class="menuzinho">

                    <ul class="language">
                        <?php
                        if ($_SESSION["tipo_acesso"] == "Administrador"){

                            ?>
                            <li><a href="PainelAdminAgenda.php">Painel Admin</a></li>
                            <li><a href="lacif_exames.php">Meus Exames</a></li>
                            <li><a href="CrudConsultaAgendamento.php">Agendar Consulta</a></li>
                            <li><a><?php echo "Acesso:" . $_SESSION['tipo_acesso']; ?></a></li>


                            <?php
                        } elseif($_SESSION["tipo_acesso"] == "Paciente"){
                            ?>
                            <li><a href="lacif_exames.php">Meus Exames</a></li>
                            <li><a href="CrudConsultaAgendamento.php">Agendar Consulta</a></li>
                            <li><a><?php echo "Acesso:" . $_SESSION['tipo_acesso']; ?></a></li>


                            <?php
                        }elseif($_SESSION["tipo_acesso"] == "Laboratorista"){
                            ?>
                            <li><a href="PainelAdminAgenda.php">Painel Laboratorista</a></li>
                            <li><a href="lacif_exames.php">Visualizar Exames</a></li>
                            <li><a href="PainelAdminListarConsulta.php">Visualizar Consultas</a></li>
                            <li><a><?php echo "Acesso:" . $_SESSION['tipo_acesso']; ?></a></li>


                            <?php
                        }
                        ?>
                        <li><a href="sair.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="lacif_home.php"><img src="img/images/logo.png" alt="Image"></a> </div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                 id="bs-example-navbar-collapse-1">

                <ul class="social-media hidden-sm">
                    <li><a href="https://www.instagram.com/xanddy._/"><i class="ion-social-instagram-outline"></i></a>
                    </li>
                    <li><a href="https://github.com/Xandyssz"><i class="ion-social-github"></i></a></li>
                </ul>

                <ul class="nav navbar-nav">

                    <li><a href="lacif_home.php">Home</a></li>

                    <li><a href="#">Exames</a>
                        <ul>
                            <li><a href="lacif_AnaliseClinica.php">Análises Clínicas</a></li>
                        </ul>
                    </li>

                    <li><a href="lacif_noticias.php">Noticias</a></li>
                    <li><a href="lacif_faq.php">FAQ</a></li>
                    <li><a href="lacif_contact-us.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>