<?php
/**
* Essa é a Header do Bootstrap Theme
* Use Bootstrap v3.1.1
*
* @link http://getbootstrap.com/
*
* @package WordPress
* @subpackage Bootstrap_Theme
* @since Bootstrap BETA
* @author Natan Augusto <natanaugusto@gmail.com>
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="<?php bloginfo( 'name' ); ?>" name="author">
	<meta content="<?php bloginfo( 'description' ); ?>" name="description">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/offcanvas.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div role="navigation" class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			<?php endif; ?>
			<div class="navbar-header">
				<a href="<?php bloginfo( 'url' ); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
			</div>
			<div class="collapse navbar-collapse">
				<?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav', 'walker' => new The_Bootstrap_Nav_Walker) ); ?>

				<?php get_search_form(); ?>
			</div>
		</div>
	</div>