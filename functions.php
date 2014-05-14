<?php
/**
* Esse é o arquivo functions do projeto
* Use Bootstrap v3.1.1
*
* @link http://getbootstrap.com/
*
* @package WordPress
* @subpackage Bootstrap_Theme
* @since Bootstrap BETA
* @author Natan Augusto <natanaugusto@gmail.com>
*/

if ( ! function_exists( 'bootstrap_theme_header' ) ) {
	function bootstrap_theme_header() {
		require_once('inc/nav-menu-walker.php');
	}

	add_action('get_header', 'bootstrap_theme_header');
}

if ( ! function_exists( 'bootstrap_theme_credits' ) ) {
	function bootstrap_theme_credits() {
		?>
		<p> Bootstrap Theme by Natan Augusto </p>
		<?php
		do_action( 'bootstrap_theme_credits' );
	}
}

show_admin_bar( false );