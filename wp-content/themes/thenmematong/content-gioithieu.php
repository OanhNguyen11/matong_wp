 
<?php 

$tieude_gioithieu  = get_field('tieu_de_gioi_thieu');
$tieude_trai = get_field('tieu_de_trai');
$gioithieu_trai  = get_field('gioi_thieu_trai');
$gioithieu_phai  = get_field('video');

?>
 <!-- GIOI THIEU -->
        <div class="gioithieu-sp pd-tb-40">
            <div class="container">
                <div class="tille title-gioithieu">
                    <h2><?php echo $tieude_gioithieu; ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-6 gioi-thieu">
                    <h3><?php echo $tieude_trai; ?></h3>
                    <p>
                        <?php echo $gioithieu_trai; ?>
                    </p>
                    </div>
                    <div class="col-md-6">
                        <div class="video vd-gioithieu">
                            <?php echo $gioithieu_phai; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end gioi thieu -->