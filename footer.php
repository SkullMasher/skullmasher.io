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
<footer class="page-footer band--darkgrey" role="contentinfo">
    <p class="disclaimer"><strong>Skullmasher.io</strong> est une société basée en France affilié au régime de auto-entrepreneur. <strong>Numéro siren : 793553488</strong></p>
    <div class="autogrid has-gutter o-wrapper o-wrapper--large">
      <div class="o-box o-box--alpha-background">
        <?php get_sidebar('footer'); ?>
      </div>
      <div class="o-box o-box--alpha-background">Hello There c'est skull test de l'autogrid</div>
      <div class="o-box o-box--alpha-background">Hello There c'est skull test de l'autogrid</div>
      <div class="o-box o-box--alpha-background">Hello There c'est skull test de l'autogrid</div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
