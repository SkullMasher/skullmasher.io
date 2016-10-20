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
<footer class="page-footer" role="contentinfo">
  <div class="band--darkgrey">
    <p class="disclaimer"><strong>Skullmasher.io</strong> est une société basée en France affilié au régime de auto-entrepreneur. <strong>Numéro siren : 793553488</strong></p>
  	<div class="site-info">
  		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'skullmasher-io' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'skullmasher-io' ), 'WordPress' ); ?></a>
  		<span class="sep"> | </span>
  		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'skullmasher-io' ), 'skullmasher-io', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
  	</div>
  </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
