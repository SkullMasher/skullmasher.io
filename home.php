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
      <div class="o-wrapper post-list flex-container">
<?php

if ( have_posts() ) :

/* Start the Loop */
while ( have_posts() ) : the_post();

  /*
   * Include the Post-Format-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
   */
  get_template_part( 'template-parts/content-blog', get_post_format() );

endwhile;

else :

  get_template_part( 'template-parts/content-blog', 'none' );

endif; ?>
  </div>
<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '', 'textdomain' ),
    'next_text' => __( '', 'textdomain' ),
) ); ?>
<?php
  /**
   * List the categories of the blog
   */
  $cats = get_categories(['orderby'   => 'id']);
  if (is_array($cats)): ?>
    <nav class="o-wrapper o-box category-nav flex-container">
      <h3 class="category-nav__title">Articles par catégories</h3>
<?php foreach ($cats as $cat): ?>
      <a class="btn category-nav__link <?php echo 'category-' . $cat->slug ?>" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
<?php endforeach ?>
    </nav>
<?php endif ?>
<?php
  /**
   * List the tags used on the blog
   */
  $tags = get_tags(['orderby'   => 'id']);
  if (is_array($tags)): ?>
    <nav class="o-wrapper o-box tag-nav">
      <h3 class="tag-nav__title">Articles par tags</h3>
      <div class="tag-nav__list">
<?php foreach ($tags as $tag): ?>
      <a class="tag-nav__link <?php echo 'tag-' . $tag->slug ?>" href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
<?php endforeach ?>
      </div>
    </nav>
<?php endif ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar('blog');
get_footer();
