<aside class="sidebar blog-sidebar o-wrapper o-wrapper--small">
  <?php echo do_shortcode( '[whoami]' ); ?>
  <p class="skulled-separator">
    <span class="skulled-separator__line"></span>
    <?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo-tiny.svg')?>
    <span class="skulled-separator__line"></span>
  </p>
  <?php echo do_shortcode( '[worktogether]' ); ?>
  <a href="mailto:antispambot(florian@skullmasher.io, 1)" class="btn btn--centered btn--top-spaced" role="button">
    <div class="btn__mailimage"><?php echo file_get_contents(get_template_directory() .'/img/mail.svg') ?></div>
    <p>florian@skullmasher.io</p>
  </a>
  <div class="social social--contained">
    <div class="social__twitter">
      <a href="https://twitter.com/skullm4sher"><?php echo file_get_contents(get_template_directory(). '/img/twitter-blue.svg') ?></a>
    </div>
    <div class="social__youtube">
      <a href="https://www.youtube.com/user/SkullM4sher/videos"><?php echo file_get_contents(get_template_directory(). '/img/youtube.svg') ?></a>
    </div>
    <div class="social__github">
      <a href="https://github.com/SkullMasher"><?php echo file_get_contents(get_template_directory(). '/img/octocat.svg') ?></a>
    </div>
  </div>
<?php dynamic_sidebar( 'blog' ); ?>
</aside>
