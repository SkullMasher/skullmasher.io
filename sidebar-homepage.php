<aside id="contact" class="sidebar home-sidebar">
<div class="wrapper wrapper--tiny flex-container--column">
  <picture class="mbs txtcenter">
    <img class="w300p border--double" src="<?php echo get_bloginfo('template_url') ?>/img/IMG_20181203_002624.jpg">
  </picture>
  <?php echo do_shortcode( '[whoami]' ); ?>
  <?php echo do_shortcode( '[worktogether]' ); ?>

  <p class="skulled-separator">
    <span class="skulled-separator__line"></span>
    <?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo-tiny.svg')?>
    <span class="skulled-separator__line"></span>
  </p>
  <a href="mailto:<?php echo antispambot('florian@skullmasher.io', 1) ?>" class="btn btn--success center mbm" role="button">
    <div class="mbs"><?php echo file_get_contents(get_template_directory() .'/img/mail.svg') ?></div>
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
</div>
</aside>
