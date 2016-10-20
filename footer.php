<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skullmasher.io
 */

?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'skullmasher-io' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'skullmasher-io' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'skullmasher-io' ), 'skullmasher-io', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
