<?php
/**
* Content do thema para WordPess desenvolvido com Bootstrap
* Use Bootstrap v3.1.1
*
* @link http://getbootstrap.com/
*
* @package WordPress
* @subpackage Bootstrap_Theme
* @since Bootstrap BETA
* @author Natan Augusto <natanaugusto@gmail.com>
*/

$post_class = 'col-6 col-sm-6';

if ( is_single() ) :
	$post_class = '';
endif;
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>
	<h2><?php the_title(); ?></h2>
	<p>
		<?php the_post_thumbnail( array('auto', 100) , array( 'class' => 'img-responsive img-thumbnail', 'alt'	=> trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )) ) ); ?>
		<?php
		if ( is_single() ) :
			the_content();
		else :
			the_excerpt(); 
		endif;
		?>
	</p>

	<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
		<p>
			<?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'bootstrap-theme' ) ); ?></span>
		</p>
	<?php endif; ?>

	<?php if ( !is_single() ) : ?>
		<p class="post-footer">
			<a class="btn btn-default" role="button" href="<?php the_permalink(); ?>"><?php _e('View details &raquo;', 'bootstrap-theme'); ?></a>
		</p>
	<?php endif; ?>
</div>