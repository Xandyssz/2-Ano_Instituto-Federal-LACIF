<div class="main-container">
    <div class="heading">
        <h1 class="heading__title">Visualizar Exames</h1>
    </div>
    <div class="cards">

        <?php
        include 'conexao.php';
//                $query = "SELECT * FROM ifsp_lacif.consultas order by id DESC";
        $query = "SELECT * FROM ifsp_lacif.consultas WHERE consultas.cpf ='". $_SESSION['cpf']."' order by id";
        //        $query = "SELECT * FROM ifsp_lacif.consultas, ifsp_lacif.usuarios WHERE consultas.cpf = usuarios.cpf";
        $resultado = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($resultado)) {
            ?>

            <div class="box">
                <div class="card card-1">
                    <div class="card__icon"><?php echo "<font color='black'>Tipo do Exame: " . $row['tipo'] . "</font>"; ?></div>

                    <p class="card__exit"><?php echo "<font color='black'>Data do Exame: " . $row['start'] . "</font>"; ?></p>

                    <h2 class="card__title"><?php echo "<font color='black'>Status do Exame: " . $row['status'] . "</font>"; ?></h2>

                    <?php echo '<a href="', $row['resultado'], '">Download de '?>

                    <a href="img/<?php echo $row['resultado'], '">Download de '?>


                    <a href="lacif_noticias.php" class="navbar-btn">LEIA MAIS</a>
                </div>

            </div>

            <?php
        }
        ?>

    </div>
</div>

