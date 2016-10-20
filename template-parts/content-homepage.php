<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article <?php post_class(); ?>>
    <?php
    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
      <?php skullmasher_io_post_date(); ?>
    </div>
    <?php endif;
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
</article><!-- #post-## -->
