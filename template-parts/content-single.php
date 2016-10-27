<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article o-wrapper'); ?>>
  <header class="entry-header">
		<div class="article__date">
			<?php skullmasher_io_posted_on_single(); ?>
		</div>
    <?php the_title( '<h1 class="article__title">', '</h1>' ); ?>

<?php
if ( has_post_thumbnail() ) : ?>
  <div class="article__featured-image">
    <?php the_post_thumbnail(); ?>
  </div>
<?php endif; ?>

	</header>

	<div class="article__content">
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
	</div>

	<footer class="article__footer">
		<?php skullmasher_io_entry_footer(); ?>
	</footer>
</article>
