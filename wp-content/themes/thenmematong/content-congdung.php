
<?php 
    wp_reset_query();

    $title_congdung = get_field('title_cong_dung_san_pham');
    $img_congdung = get_field('anh');


 ?>

<!-- CONG DUNG SP -->
        <div class="cong-dung-sp pd-tb-40-20">
            <div class="container">
                <h2><?php echo $title_congdung; ?></h2>
                <div class="row">

                 

                    <div class="col-md-4 cong-dung-left">

                       <?php 

                            $congdung = new WP_Query(array('post_type' => 'cong-dung_san_pham'));

                            while ($congdung -> have_posts()) {
                                $congdung -> the_post();                    

                        ?>

                        <div class="row">
                            <div class="col-md-9">
                                <h4><?php the_title(); ?></h4>
                                <?php the_content() ?>
                            </div>
                            <div class="col-md-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        
                         <?php   } ?>

                    </div>

                   

                    <div class="col-md-4 cong-dung-center">
                        <div class="lo-nho">
                            <img src="<?php echo  $img_congdung['url'];?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 cong-dung-right">

                        <?php 

                            $congdung = new WP_Query(array('post_type' => 'cong-dung_san_pham'));

                            while ($congdung -> have_posts()) {
                                $congdung -> the_post();                    

                        ?>

                        <div class="row">
                            <div class="col-md-3">
                                <?php the_post_thumbnail(); ?>
                               
                            </div>
                            <div class="col-md-9">
                                <h4><?php the_title(); ?></h4>
                                <?php the_content() ?>
                            </div>
                            
                        </div>
                        
                        <?php   } ?>


                    </div>
                </div>
            </div>
         </div> <!-- end cong dung sp -->