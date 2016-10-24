<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-list__item'); ?>>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
    <?php
    endif; ?>

		<div class="entry-meta">
      <?php skullmasher_io_post_publish_date(); ?>
    </div><!-- .entry-meta -->
</article><!-- #post-## -->
