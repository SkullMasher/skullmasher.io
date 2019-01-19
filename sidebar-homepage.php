<aside class="sidebar home-sidebar flex-container--column">
  <?php echo do_shortcode( '[whoami]' ); ?>
  <p class="skulled-separator">
    <span class="skulled-separator__line"></span>
    <?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo-tiny.svg')?>
    <span class="skulled-separator__line"></span>
  </p>
  <?php echo do_shortcode( '[worktogether]' ); ?>
  <a href="mailto:<?php echo antispambot('florian@skullmasher.io', 1) ?>" class="btn btn--success center mbm" role="button">
    <div class="btn__mailimage"><?php echo file_get_contents(get_template_directory() .'/img/mail.svg') ?></div>
    <p><?php echo antispambot('florian@skullmasher.io') ?></p>
  </a>
  <div class="social">
    <div class="mrl">
      <a href="https://twitter.com/skullm4sher"><?php echo file_get_contents(get_template_directory(). '/img/twitter-blue.svg') ?></a>
    </div>
    <div class="">
      <a href="https://github.com/SkullMasher"><?php echo file_get_contents(get_template_directory(). '/img/octocat.svg') ?></a>
    </div>
  </div>
<?php // dynamic_sidebar( 'homepage' ); ?>
</aside>
