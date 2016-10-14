<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main o-wrapper" role="main">
  <div class="band band--lightgrey">
    <div class="promotional-skills o-wrapper">
      <header class="promotional-skills__header o-media">
        <?php echo file_get_contents(get_template_directory() .'/img/develop.svg') ?>
        <h2 class="promotional-skills__title o-media-content">Concevoir avec Wordpress</h2>
      </header>
      <p class="promotional-skills__text">Dans le monde de la gestion de contenu web, Wordpress est bien souvent la solution la plus maitrisée par les utilisateurs. Si à l'avenir votre site vitrine devient un site e-comerce, Wordpress répondra à ce besoin.</p>
    </div>
    <div class="promotional-skills o-wrapper">
      <header class="promotional-skills__header o-media">
        <?php echo file_get_contents(get_template_directory() .'/img/share.svg') ?>
        <h2 class="promotional-skills__title o-media-content">Former et Partager</h2>
      </header>
      <p class="promotional-skills__text">Demanger une formation sur votre solution Wordpress. Découvrez votre site Wordpress par la pratique. Le web est composé de technologie libre et open-source en son coeur, le partage des connaissances en fait partis intégrante. Retrouvez toutes les astuces et tutoriaux web sur le blog.</p>
    </div>
    <div class="promotional-skills o-wrapper">
      <header class="promotional-skills__header o-media">
        <?php echo file_get_contents(get_template_directory() .'/img/develop.svg') ?>
        <h2 class="promotional-skills__title o-media-content">Devellopper</h2>
      </header>
      <p class="promotional-skills__text">Adaptation des maquettes aux écran responsive pour refleter au mieux la vision du web designer. Devellopement back-office avec PHP et NodeJS. Application iOS et Android hybride avec Cordova (Phonegap). Instalation et déploiement de votre site web en Python, Ruby, PHP, NodeJS sur Linux. Contacter moi pour dicuter de votre projet.</p>
    </div>
    <div class="promotional-skills o-wrapper">
      <header class="promotional-skills__header o-media">
        <?php echo file_get_contents(get_template_directory() .'/img/server.svg') ?>
        <h2 class="promotional-skills__title o-media-content">Maintenir des Solutions Web</h2>
      </header>
      <p class="promotional-skills__text">Bien trop souvent des utilisateurs se retrouve seul face à la gestion de leur site web. Tous logiciel informatique à besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard choisissez un responsable capable de vous diriger dans la conduite du changement de votre site web et assurer sa pérénité.</p>
    </div>
  </div>
<?php
  /*
   * wp_get_recent_posts : codex.wordpress.org/Function_Reference/wp_get_recent_posts
   */
  global $post;
  // Number of posts that gets shown on the front page.
  $number_posts = 1;
  $recent_posts_args = array(
    'numberposts' => $number_posts,
    'post_status' => publish
  );
  $recent_posts = wp_get_recent_posts($recent_posts_args, OBJECT);

  foreach( $recent_posts as $post ) : ?>

<?php
  setup_postdata($post);
  if ($post->post_status === 'publish') {
    get_template_part( 'template-parts/content', get_post_format() );
  }
?>

<?php endforeach; wp_reset_postdata(); ?>
    <div class="latest-news">
      <a href="<?php echo get_permalink(get_page_by_title('news')) ?>" class="latest-news__link">All News</a>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar('homepage');
get_footer();
