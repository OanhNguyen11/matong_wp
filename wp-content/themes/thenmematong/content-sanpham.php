<?php 


	wp_reset_query();
	
	$title_sanpham = get_field('tieu_de_san_pham');


 ?>


  <!-- OWL CAROUSEL -->
        <div class="sanpham">
            <div class="container">       
                <div class="row">              
                    <h2><?php echo $title_sanpham; ?></h2>                       
                    <div class="owl-carousel owl-theme">

                    	<?php 
                    	    $sanpham = new WP_Query(array('post_type' => 'san_pham'));
                    		
                    		while ($sanpham -> have_posts()) {
                    			$sanpham -> the_post();
                    			$gia_moi = get_field('gia_moi');
                    			$gia_cu = get_field('gia_cu');
                    			$ten_nut = get_field('tieu_de_nut');
                    			$link_dat_hang = get_field('link');
                    		

                    	 ?>
                        <div class="item"> 
                            <?php the_post_thumbnail(); ?>
                            <div class="mota-sp">
                                <div class="ten-sp">
                                   <?php the_title(); ?>
                                </div>
                                <div class="gia"><?php echo $gia_moi;?></div>
                                <div class="gia-cu"><?php echo $gia_cu;?></div>
                                <button class="btn-info btn-block"><a href="<?php echo $link_dat_hang; ?>"><?php echo $ten_nut;?></a></button>
                            </div>
                            
                            
                        </div>

                        <?php } ?>
                       
                                          
                    </div>
                </div>                   
        	</div>
        </div>