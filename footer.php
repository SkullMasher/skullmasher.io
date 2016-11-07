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
<footer class="page-footer band--darkgrey flex-container-v" role="contentinfo">
    <p class="nota-bene o-box o-box--medium txtcenter"><strong>Skullmasher.io</strong> est une société basée en France affilié au régime auto-entrepreneur. <strong>Numéro siren : 793553488</strong></p>
    <div class="autogrid has-gutter o-wrapper o-wrapper--large">
      <div class="keypages page-footer__item o-box o-box--alpha-background">
        <?php get_sidebar('keypages'); ?>
      </div>
      <div id="citation" class="quote page-footer__item o-box o-box--alpha-background">
        <?php get_sidebar('quote'); ?>
      </div>
      <div class="colophon page-footer__item o-box">
        <?php get_sidebar('colophon'); ?>
      </div>
    </div>
    <a class="btn btn--centered btn--top-spaced" href="#top">Retour en haut de page</a>
</footer>

<?php wp_footer(); ?>

</body>
</html>
