<aside class="sidebar-homepage">
  <p class="whoami">Bonjour je suis Florian 'Skullmasher' Ledru et j'ai 24ans. Je suis un freelancer depuis juin 2016 qui exerce en région parisienne et partout sur la toile. Passionnée d'informatique, j'ai choisis de faire le web mon travail car c'est un outil très accessible et construit à partir de technologies libre à son coeur. Pour en savoir plus consulter la page à propos.</p>
  <p class="skulled-separator">
    <span class="skulled-separator__line"></span>
    <?php echo file_get_contents(get_template_directory() .'/img/skullmasherio-logo-tiny.svg')?>
    <span class="skulled-separator__line"></span>
  </p>
  <p>Vous souhaitez travailler avec moi ? Une question ? Envie d'aller boire une bière ? Je serais ravie d'échanger avec vous.</p>
  <a href="#" class="btn"><div class="btn__mailimage"><?php echo file_get_contents(get_template_directory() .'/img/mail.svg') ?></div><p>florian@skullmasher.io</p></a>
  <?php // dynamic_sidebar( 'homepage' ); ?>
</aside>
