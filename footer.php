<?php
/**
 *	The template for displaying the Footer.
 *
 *	@package materialx
 */
?>
		<div class="left-sidebar sidebar-mobile">
			<?php get_sidebar("mobile"); ?>
		</div>

		<div class="clearfix"></div>
		<footer>
			<span class="alignleft">&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><span> &mdash; <?php printf( __( 'Powered by <a href="%s">WordPress</a>', 'metro-creativex'), 'http://www.wordpress.org' ); ?></span></span><br\>			
			</footer>
	<?php wp_footer(); ?>
	</body>
</html>