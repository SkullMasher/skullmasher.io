<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('o-box wrapper wrapper--small'); ?>>
	<header class="page__header">
		<?php the_title( '<h1 class="page__title">', '</h1>' ); ?>
	</header>

	<div class="page__content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skullmasher-io' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="page__footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'skullmasher-io' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit">',
					'</span>',
          '',
          'edit__link btn btn--inline btn--rounded'
				);
			?>
		</footer>
	<?php endif; ?>
</article>
