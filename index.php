<?php
//error_reporting(E_ALL);
//ini_set('display_errors','on');
/**
* Essa é a index do thema para WordPess desenvolvido com Bootstrap
* Use Bootstrap v3.1.1
*
* @link http://getbootstrap.com/
*
* @package WordPress
* @subpackage Bootstrap_Theme
* @since Bootstrap BETA
* @author Natan Augusto <natanaugusto@gmail.com>
*/
get_header(); ?>
<div class="container">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				
				get_template_part( 'content', get_post_format() );

			}
		} else {
			get_template_part( 'content', 'none' );
		}
		?>
	</div>
	<?php //get_sidebar( 'content' ); ?>

	<?php get_footer(); ?>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/offcanvas.js"></script>

</body>
</html>