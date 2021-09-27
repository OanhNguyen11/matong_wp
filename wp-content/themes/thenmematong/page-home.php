<?php 

/*

	Template Name: Trang chu

 */ 

 ?>

 <?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matong
 */

get_header();
get_template_part( 'content', 'gioithieu' );
get_template_part( 'content', 'xemthem' );
get_template_part( 'content', 'congdung' );
get_template_part( 'content', 'album' );
get_template_part( 'content', 'sanpham');
get_template_part( 'content', 'danhgia' );
get_template_part( 'content', 'tintuc' );
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();

