<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matong
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <!-- carousel css -->
    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/css/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/css/owl.theme.default.min.css">

    <!-- style.css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/style.css">


    <!-- javascript -->
    <script src="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/js/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ?>/owlcarousel/js/owl.carousel.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'matong' ); ?></a>

	 <!-- HEADER -->

     <?php 
        $hotline_header = get_field('hot_line');
        $location_header =  get_field ('dia_chi');
        $logo_header = get_field('logo');
        $khuyenmai_header = get_field('khuyen_mai');

      ?>
        <header class="header">
            <!-- header top -->
            <div class="header-top">
                <div class="container">
                    <div class="row row-1">
                        <div class="col-md-4 hd-top-left">
                            <ul>
                                <li>Hotline: <?php echo $hotline_header; ?></li>
                                <li>Địa chỉ: <?php echo $location_header; ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="logo text-center">
                                <img src="<?php echo $logo_header['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 hd-top-right">
                            <div class="login">
                                <ul>
                                    <li><b>Đăng nhập</b> hoặc<b> Đăng ký</b></li>
                                    <li><b>Khuyến mãi:</b> <?php echo $khuyenmai_header; ?></li>
                                </ul>
                            
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>  <!-- end header-top -->
           
            <!-- menu -->
            <nav class="navbar navbar-expand-md navbar-light">           
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>     
                </button>

                <?php wp_nav_menu(array(
                	'container' => 'div',
                	'container_class' => 'collapse navbar-collapse',
                	'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0'
                )); ?>

                <!-- <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Công dụng sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                    
                    </ul>
                
                </div> -->
            </nav> <!-- end menu -->

             <!-- BANNER -->

             <?php 

             $banner = get_field('banner');
              ?>
            <div class="banner">
                <div class="container-fluid">          
                    <img src="<?php echo $banner['url']; ?>" alt="">
                </div>                 
            </div> <!-- end banner -->
            
        </header> <!-- end header -->
    
