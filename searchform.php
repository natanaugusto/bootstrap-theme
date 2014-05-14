<?php
/**
* Form de busca do template WordPress desenvolvido com o Bootstrap
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
<form action="/" method="get">
	<div class="input-group input-search">
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">Search</button>
		</span>
	</div>
</form>