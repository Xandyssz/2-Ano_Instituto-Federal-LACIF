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
                    <div class="carousel-indicators">
                        <?php
                        $controle_ativo = 2;
                        $controle_num_slide = 1;
                        $sqlFotos = "SELECT * FROM ifsp_lacif.patrocinadores WHERE ativo = 0 ORDER BY titulo";
                        $dados = mysqli_query($conn, $sqlFotos);
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            if($controle_ativo == 2){
                                ?>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1">
                                </button>
                                <?php
                                $controle_ativo = 1;
                            } else {
                                ?>
                                <button type="button" data-bs-target="#myCarousel"
                                        data-bs-slide-to="<?php echo $controle_num_slide;?>" aria-label="Slide 2">
                                </button>
                                <?php
                                $controle_num_slide++;
                            }
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        $controle_ativo = 2;
                        $controle_num_slide = 1;
                        $result_carousel = "SELECT * FROM ifsp_lacif.patrocinadores WHERE ativo = 0 ORDER BY titulo";
                        $resultado_carousel = mysqli_query($conn, $result_carousel);
                        while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
                        if($controle_ativo == 2){
                        ?>
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img" width="100%" height="100%" src="img/<?php echo $row_carousel['img_nome'];?>" alt="">
                        </div>
                    </div>
                    <?php
                    $controle_ativo = 1;
                    } else {
                        ?>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img" width="100%" height="100%" src="img/<?php echo $row_carousel['img_nome'];?>" alt="">
                        </div>
                        <?php
                    }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
