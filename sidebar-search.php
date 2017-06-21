<aside class="sidebar sidebar--search o-wrapper o-wrapper--small">
  <p class="whoami">Je suis Florian "Skullmasher" Ledru et j'ai 24ans. Je suis un freelancer depuis juin 2016 qui exerce en région parisienne et partout sur la toile. Passionnée d'informatique, j'ai choisis de faire le web mon travail car c'est un outil très accessible et construit à partir de technologies libre à son coeur. Pour en savoir plus consulter la page <a href="<?php echo site_url() . '/a-propos' ?>">à propos</a>.</p>
  <p class="skulled-separator">
    <span class="skulled-separator__line"></span>
    <?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo-tiny.svg')?>
    <span class="skulled-separator__line"></span>
  </p>
  <p>Vous souhaitez travailler avec moi ? Une question ? On en discute autour d'un verre ? Je serais ravie d'échanger avec vous.</p>
  <a href="#" class="btn btn--centered btn--top-spaced" role="button">
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
