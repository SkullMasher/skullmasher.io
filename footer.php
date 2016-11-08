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
    <p class="nota-bene o-box o-box--medium txtcenter"><strong>Skullmasher.io</strong> est une société affilié au régime auto-entrepreneur. <strong>Numéro siren : 793553488</strong></p>
    <div class="autogrid has-gutter o-wrapper o-wrapper--large">
      <div class="keypages page-footer__column o-box">
        <?php get_sidebar('keypages'); ?>
      </div>
      <div id="citation" class="quote page-footer__column o-box">
        <?php get_sidebar('quote'); ?>
      </div>
      <div>
        <?php get_sidebar('colophon'); ?>
        <div class="o-box social page-footer__item">
          <div class="social__twitter">
            <a href="https://twitter.com/skullm4sher"><?php echo file_get_contents(get_template_directory(). '/img/twitter-blue.svg') ?></a>
          </div>
          <div class="social__github">
            <a href="https://github.com/SkullMasher"><?php echo file_get_contents(get_template_directory(). '/img/octocat.svg') ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="band--tiled-gradient-background flex-container-v">
      <a class="btn btn--large btn--centered btn--extra-spaced" href="#top">Retour en haut de page</a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
