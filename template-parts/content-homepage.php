<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>
<article <?php post_class('last-articles__article-container'); ?>>
<?php if ( 'post' === get_post_type() ) : ?>
  <?php skullmasher_io_post_date(); ?>
<?php endif; ?>
<?php the_title( '<h3 class="last-articles__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
  <hr class="article-separator">
</article>
