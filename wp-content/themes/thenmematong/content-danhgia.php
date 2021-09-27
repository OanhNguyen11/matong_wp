<?php 
    wp_reset_query();
	$danh_gia = new WP_Query(array('post_type' => 'danh_gia'));
	$bg_user = get_field('bg_user');
	

 ?>


  <!-- DANH GIA KHACH HANG -->
        <div class="khach-hang pd-tb-40" style = " background-image: url(<?php echo $bg_user['url']; ?>)">
            <div class="container">

                    <div id="slide-kh" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slide-kh" data-slide-to="0" class="active"></li>
                            <li data-target="#slide-kh" data-slide-to="1"></li>
                            <li data-target="#slide-kh" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">

                        	<?php 
                        		while ($danh_gia -> have_posts()) {
                        			$danh_gia -> the_post();
                        		

                        	 ?>
                            <div class="carousel-item">
                                <?php the_post_thumbnail() ?>
                                <div class="noi-dung-nx">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>


                            <?php } ?>
                           <!--  <div class="carousel-item">
                                <img src="images/ngoc-trinh.jpg" alt="Second slide">
                                <div class="noi-dung-nx">
                                    <h3>Phương Trinh - Hà Nội</h3>
                                    <p>Là một người khá kỹ tính, tôi luôn luôn lựa chọn những sản phẩm tốt. Và đây là nơi tôi đặt trọng niềm tin</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/phuong-trinh.jpg" alt="Third slide">
                                <div class="noi-dung-nx">
                                    <h3>Ngọc Trinh - Sài Gòn</h3>
                                    <p>Là một người khá kỹ tính, tôi luôn luôn lựa chọn những sản phẩm tốt. Và đây là nơi tôi đặt trọng niềm tin</p>
                                </div>
                            </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#slide-kh" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slide-kh" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

        </div>