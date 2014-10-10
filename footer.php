<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package DrautaKit
 */
?>
	</div><!-- #content -->
	<footer id="colophon" class="container " role="contentinfo">
		<div class="site-info">
				<div class="g--half">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'drautakit' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'drautakit' ), 'WordPress' ); ?></a>
				</div>
				<div class="g--half g--last">
					<?php printf( __( 'Theme: %1$s by %2$s.', 'drautakit' ), 'DrautaKit', '<a href="http://drauta.com/" rel="designer">Drauta.com</a>' ); ?>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
