<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">

                <div class="title-box">
                    <br>
                    <br>
                    <h2>ULTIMAS NOTICIAS</h2>
                    <h5>[Texto Gerado] → Lorem ipsum dolor sit amet.</h5>
                </div>
            </div>

            <?php
            include 'conexao.php';
            $query = "SELECT * FROM lacifs93_ifsp_lacif.noticias order by idNoticia DESC LIMIT 2";
            $resultado = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($resultado)) {
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="left">
                        <div class="article-image"><img src="img/<?php echo $row['img_user']?>" alt=""></div>
                        <img src="img/images/rated-article.png" alt="Image" class="rated-article">
                        <h3>EM: <strong><?php echo $row['titulo'];?></strong> </h3>
                        <small>Post <strong><?php echo $row['dataNoticia'];?></strong> by ADM</small>
                        <p><?php echo $row['descricao'];?></p>
                        <a href="lacif_noticias.php" class="btn-turquaz-md">LEIA MAIS</a> </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</section>