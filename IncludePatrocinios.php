<section class="logos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="title-box">
                    <h2>Patrocinadores</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-logos">
                    <?php
                    include 'conexao.php';
                    $query = "SELECT * FROM ifsp_lacif.patrocinadores WHERE ativo = 0 order by idPatrocinador";
                    $resultado = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <div class="item1">
                        <div class="article-image"><img src="img/<?php echo $row['img_nome']?>" alt=""></div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
