<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
</section>
<footer class="row fullwidth">
	<div class="clearfix"></div>
		<div class="home-footer">
			<div class="home-footer-content">
			<span id="copyright"><?php echo ot_get_option('copyright')?></span>
			<?php wp_nav_menu( array( 'theme_location' => 'home-footer' ) ); ?>
			<div class="socials">
				<span id="social_text"><?php echo ot_get_option('social')?></span>
				<span id="socials_icons">
					<a href="https://twitter.com/ariew_project" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://instagram.com/ariew_project/" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-youtube-play" target="_blank"></i></a>
					<a href="#"><i class="fa fa-vimeo-square"></i></a>
				</span>
			</div>
			</div>
		</div>
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

</html>
