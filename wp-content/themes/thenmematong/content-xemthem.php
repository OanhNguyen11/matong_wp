 
<?php 
    wp_reset_query();

	$bg_xemthem = get_field('background_xem_them');
	$title_xemthem = get_field('tieu_de_xem_them');
	$tennut_xemthem = get_field('ten_nut_xem_them');
	$linknut_xemthem = get_field('link_nut_xem_them');
    $bg_user = get_field('bg_user');

 ?>


 <!-- XEM CHI TIET -->
    <div class="xem-chi-tiet" style = "background-image: url('<?php echo $bg_user['url']; ?>')">
        <div class="container">
            <div class="row">
                <h2><?php echo $title_xemthem; ?></h2>

                <?php 
                    if(!empty($tennut_xemthem)){



                 ?>
                <button type="button" class="btn btn-info btn-block"><a href=" <?php echo $linknut_xemthem; ?> "><?php echo $tennut_xemthem; ?></a></button>

                <?php   } ?>

            </div>
        </div>
    </div>
        