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
    <main id="main" class="site-main" role="main">
      <div id="primary" class="content-area">
        <main id="main" class="site-main o-wrapper" role="main">
        <?php
          /*
           * wp_get_recent_posts : codex.wordpress.org/Function_Reference/wp_get_recent_posts
           */
          global $post;
          // Number of posts that gets shown on the front page.
          $number_posts = 5;
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

        <?php endforeach;
        wp_reset_postdata(); ?>
          <div class="latest-news">
            <a href="<?php echo get_permalink(get_page_by_title('news')) ?>" class="latest-news__link">All News</a>
          </div>
        </main><!-- #main -->
      </div><!-- #primary -->

    <?php
      get_sidebar();
    ?>

    <?php get_footer(); ?>

<?php
get_sidebar();
get_footer();
