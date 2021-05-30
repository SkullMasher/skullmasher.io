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

/*
 * wp_get_recent_posts : codex.wordpress.org/Function_Reference/wp_get_recent_posts
 */
global $post;
// Number of posts that gets shown on the front page.
$number_posts = 5;
$recent_posts_args = array(
  'numberposts' => $number_posts,
  'post_status' => 'publish'
);
$recent_posts = wp_get_recent_posts($recent_posts_args, OBJECT);

// var_dump($recent_posts);

get_header(); ?>
<main role="main">
  <div class="band band--lightgrey">
    <div class="promotional-skills wrapper wrapper--large">
      <div class="promotional-skill">
        <header class="promotional-skill__header">
          <picture class="promotional-skill__picto"><?php echo file_get_contents(get_template_directory() .'/img/wordpress.svg') ?></picture>
          <h2 class="promotional-skill__title">Concevoir avec Wordpress</h2>
        </header>
        <p class="promotional-skill__text">Dans le monde de la gestion de contenu web, Wordpress est bien souvent la solution la plus maitrisée par les utilisateurs. Si à l'avenir votre site vitrine devient un site e-commerce, Wordpress répondra à ce besoin.</p>
      </div>
      <div class="promotional-skill">
        <header class="promotional-skill__header">
          <picture class="promotional-skill__picto"><?php echo file_get_contents(get_template_directory() .'/img/develop.svg') ?></picture>
          <h2 class="promotional-skill__title">Développer et Déployer</h2>
        </header>
        <p class="promotional-skill__text">Adaptation des maquettes aux écrans responsive pour refléter au mieux la vision du web designer. Développement back-office avec PHP et NodeJS. Application mobile iOS et Android hybride avec Cordova (Phonegap). Installation et déploiement de votre site web en Python, Ruby, PHP, NodeJS sur Linux. Contactez-moi pour discuter de votre projet.</p>
      </div>
      <div class="promotional-skill">
        <header class="promotional-skill__header">
          <picture class="promotional-skill__picto"><?php echo file_get_contents(get_template_directory() .'/img/server.svg') ?></picture>
          <h2 class="promotional-skill__title">Maintenir des Solutions&nbsp;Web</h2>
        </header>
        <p class="promotional-skill__text">Bien trop souvent les utilisateurs se retrouve seul face à la gestion de leur site web. Tout logiciel informatique a besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard choisissez un responsable capable de vous diriger dans la conduite du changement de votre site web et assurer sa pérénité.</p>
      </div>
      <div class="promotional-skill">
        <header class="promotional-skill__header">
          <picture class="promotional-skill__picto"><?php echo file_get_contents(get_template_directory() .'/img/share.svg') ?></picture>
          <h2 class="promotional-skill__title">Former et Partager</h2>
        </header>
        <p class="promotional-skill__text">Demandez une formation sur votre solution Wordpress. Découvrez votre site par la pratique. Le web est composé de technologie libre et open-source en son coeur, le partage des connaissances en fait partie intégrante. Retrouvez toutes les astuces et tutoriaux web sur le blog.</p>
      </div>
    </div>
  </div>
  <div class="content-sidebar--medium wrapper">
    <div class="last-articles flex-container--column">
      <div class="last-articles__heading-container">
        <h3 class="last-articles__heading">Les <?php echo $number_posts ?> derniers Articles</h3>
      </div>
  <?php foreach( $recent_posts as $post ) :

  setup_postdata($post);
  if ($post->post_status === 'publish') {
    get_template_part( 'template-parts/content-homepage', get_post_format() );
  }

  endforeach; wp_reset_postdata(); ?>
      <div class="flex-container mtl">
        <a href="<?php echo get_permalink(get_page_by_title('blogmasher')) ?>" class="btn btn--success btn--big u-uppercase center" role="button">Voir tous les articles</a>
      </div>
    </div>
    <?php get_sidebar('homepage') ?>
  </div>
</main>

<?php
get_footer();
