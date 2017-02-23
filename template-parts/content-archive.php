<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-article o-wrapper o-wrapper--small'); ?>>
	<header class="archive-article__header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="archive-article__title">', '</h1>' );
		else :
			the_title( '<h2 class="archive-article__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php skullmasher_io_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'skullmasher-io' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skullmasher-io' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // skullmasher_io_entry_footer(); ?>
	</footer><!-- .entry-footer -->
  <hr class="separator separator--trimed">
</article><!-- #post-## -->
