 
<?php 
    wp_reset_query();

    $tintuc = new WP_Query(array('post_type' => 'tin_tuc'));

 ?>

 <!-- TIN TUC SUC KHOE -->
        <div class="tintuc pd-tb-40">
            <div class="container">
                <h2>Tin tức</h2>
                <div class="row">

                    <?php 

                        while ($tintuc -> have_posts()) {
                            $tintuc -> the_post();
                       

                     ?>

                    <div class="col-md-4">
                        <div class="_1tin">
                            <?php the_post_thumbnail(); ?>
                            <div class="title-tin"><?php the_title(); ?></div>
                            <div class="mota-tin"><?php the_content(); ?></div>
                        </div>
                    </div>

                    <?php  } ?>
                   <!--  <div class="col-md-4">
                        <div class="_1tin">
                            <img src="images/avt-2.jpg" alt="">
                            <div class="title-tin">Con ong chế tạo ra mật ong như thế nào?</div>
                            <div class="mota-tin">Một đội quân ong thợ sẽ bay đi hút mật hoa, hút khi nào đầy diều sẽ mang về tổ. Khi mang mật hoa về đến tổ sẽ có...</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="_1tin">
                            <img src="images/avt-3.jpg" alt="">
                            <div class="title-tin">Vai trò , nhiệm vụ của từng con ong</div>
                            <div class="mota-tin">Trong một tổ ong sẽ bao gồm ong chúa, ong thợ, ong đực và ấu trùng ong. Vậy thì nhiệm vụ của mỗi con ong sẽ như tế nào,...</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>