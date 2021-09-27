
<?php 

	wp_reset_query();

	$album = new WP_Query(array('post_type' => 'album_anh'));

 ?>
 <!-- ALBUM ANH -->
         <div class="hinhanh pd-tb-40">
             <div class="container-fluid">
                 <div class="row">

                 	<?php 

                 	while ($album -> have_posts()) {
                 		$album -> the_post();
                 	
                 	 ?>

                     <div class="col-md-2">
                     
                     	<?php the_post_thumbnail(); ?>
                     </div>
                     
                     <?php } ?>
                 </div>
             </div>
         </div>