<?php
/**
 * Template du menu
 *
 *
 *
 * 
 */

?>
<div class="menu-home-wrapper">
	<div class="row">
		<a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo_ariew.png" /></a>
		<?php wp_nav_menu( array( 'theme_location' => 'home-menu' ) ); ?>
	</div>
</div>