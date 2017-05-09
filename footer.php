<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialComponentsWP
 */

?>

	</div><!-- #content -->

	
	<footer id="colophon" class="site-footer"  role="contentinfo">
		<div class="mdc-layout-grid max-width">
			<div class="site-info mdc-layout-grid__cell mdc-layout-grid__cell--span-12"">
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mcwp' ), 'mcwp', '<a href="http://braginteractive.com/" rel="designer">Brad Williams</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
