<section class="blogs" id="blogs">

    <h1 class="heading"> ULTIMAS <span>NOTICIAS</span> </h1>

    <div class="box-container">
        <?php
            include 'conexao.php';
            $query = "SELECT * FROM lacifs93_ifsp_lacif.noticias order by idNoticia DESC LIMIT 3";
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

<!--         PRIMEIRA CAIXA DE NOTICIAS-->
<!--        <div class="box">-->
<!--            <div class="image">-->
<!--                <img src="images/noticias/noticia1.webp" alt="">-->
<!--            </div>-->
<!--            <div class="content">-->
<!--                <div class="icon">-->
<!--                    <a href="#"> <i class="fas fa-calendar"></i> 1st August, 2022 </a>-->
<!--                    <a href="#"> <i class="fas fa-user"></i> by admin </a>-->
<!--                </div>-->
<!--                <h3>Check-up após infecção</h3>-->
<!--                <p>Médicos apontam que não existe 'receita de bolo', que sirva de orientação para todo mundo que teve doença. Mas há três situações que podem exigir uma avaliação médica mais aprofundada.</p>-->
<!---->
<!--                    <a href="#" onclick="window.location.href='#'" class="btn"> Cadastrar Noticia <span class="fas fa-chevron-right"></span> </a>-->
<!--                    <a href="#" class="btn"> Editar Noticia <span class="fas fa-chevron-right"></span> </a>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--         SEGUNDA CAIXA DE NOTICIAS-->
<!--        <div class="box">-->
<!--            <div class="image">-->
<!--                <img src="images/noticias/noticia2.webp" alt="">-->
<!--            </div>-->
<!--            <div class="content">-->
<!--                <div class="icon">-->
<!--                    <a href="#"> <i class="fas fa-calendar"></i> 1st August, 2022 </a>-->
<!--                    <a href="#"> <i class="fas fa-user"></i> by admin </a>-->
<!--                </div>-->
<!--                <h3>Nova onda de COVID-19</h3>-->
<!--                <p>A Organização Mundial da Saúde (OMS) alertou para escalada de casos e hospitalizações por covid-19 na Europa,-->
<!--                    semelhante à situação de 2021. Dessa vez, a nova onda está sendo impulsionada por sublinhagens da-->
<!--                    variante Ômicron, principalmente BA.2 e BA.5.</p>-->
<!---->
<!--                <a href="#" onclick="window.location.href='#'" class="btn"> Cadastrar Noticia <span class="fas fa-chevron-right"></span> </a>-->
<!--                <a href="#" class="btn"> Editar Noticia <span class="fas fa-chevron-right"></span> </a>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--       TERCEIRA CAIXA DE NOTICIAS-->
<!--        <div class="box">-->
<!--            <div class="image">-->
<!--                <img src="images/noticias/noticia3.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="content">-->
<!--                <div class="icon">-->
<!--                    <a href="#"> <i class="fas fa-calendar"></i> 1st August, 2022 </a>-->
<!--                    <a href="#"> <i class="fas fa-user"></i> by admin </a>-->
<!--                </div>-->
<!--                <h3>Nova onda de COVID-19</h3>-->
<!--                <p>A Organização Mundial da Saúde (OMS) alertou para escalada de casos e hospitalizações por covid-19 na Europa,-->
<!--                    semelhante à situação de 2021. Dessa vez, a nova onda está sendo impulsionada por sublinhagens da-->
<!--                    variante Ômicron, principalmente BA.2 e BA.5.</p>-->
<!---->
<!---->
<!--                    <a href="#" onclick="window.location.href='#'" class="btn"> Cadastrar Noticia <span class="fas fa-chevron-right"></span> </a>-->
<!--                    <a href="#" class="btn"> Editar Noticia <span class="fas fa-chevron-right"></span> </a>-->
<!---->
<!--            </div>-->
<!--        </div>-->

    </div>
</section>