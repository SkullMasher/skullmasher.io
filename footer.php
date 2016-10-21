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
    <p class="o-box disclaimer"><strong>Skullmasher.io</strong> est une société basée en France affilié au régime auto-entrepreneur. <strong>Numéro siren : 793553488</strong></p>
    <div class="autogrid has-gutter o-wrapper o-wrapper--large">
      <div class="o-box o-box--alpha-background">
        <?php get_sidebar('keypages'); ?>
      </div>
      <div class="o-box o-box--alpha-background">
        <?php get_sidebar('quote'); ?>
      </div>
      <div class="o-box o-box--alpha-background">
        <?php get_sidebar('colophon'); ?>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
