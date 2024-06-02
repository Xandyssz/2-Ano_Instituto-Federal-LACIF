<section class="blogs" id="blogs">

    <h1 class="heading"> ULTIMAS <span>NOTICIAS</span> </h1>

    <div class="box-container">
        <?php
            include 'conexao.php';
            $query = "SELECT * FROM ifsp_lacif.noticias order by idNoticia DESC LIMIT 3";
            $resultado = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($resultado)) {
        ?>

                <div class="box">
                    <div class="image">
                        <img src="img/<?php echo $row['img_user']?>" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <small>Post <strong><?php echo $row['dataNoticia'];?></strong> by ADM</small>
                        </div>
                        <h3><?php echo $row['titulo'];?></h3>
                        <p><?php echo $row['descricao'];?></p>
                    </div>
                </div>

        <?php
            }
        ?>
    </div>
</section>