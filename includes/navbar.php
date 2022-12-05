                    <nav class="navbar navbar-expand fixed-top be-top-header">
                            <div class="container-fluid">
                              <div class="be-navbar-header"><a class="navbar-brand" href="lacif_home.php"></a>
                              </div>
                              <div class="be-right-navbar">
                                <ul class="nav navbar-nav float-right be-user-nav">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                      <img src="img/avatar.png" alt="Avatar">
                                    </a>
                                    <div class="dropdown-menu" role="menu">
                                      <div class="user-info">
                                        <div class="user-acesso"><?php echo "Acesso:" . $_SESSION['tipo_acesso']; ?></div>
                                        <div class="user-position online">online</div>
                                      </div>
                                        <a class="dropdown-item" href="sair.php"><span class="icon mdi mdi-power"></span>Logout</a>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                    </nav>
