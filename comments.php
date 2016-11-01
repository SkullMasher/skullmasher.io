<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
<?php	if ( have_comments() ) : ?>
<?php if (get_comments_number() > 1): ?>
  <h2><?php echo get_comments_number() . ' commentaires' ?></h2>
<?php else: ?>
  <h2><?php echo get_comments_number() . ' commentaire' ?></h2>
<?php endif; ?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Navigation commentaires', 'skullmasher-io' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Ancien commentaires', 'skullmasher-io' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Nouveau commentaires', 'skullmasher-io' ) ); ?></div>

			</div>
		</nav>
<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
				) );
			?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Navigation commentaires', 'skullmasher-io' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Ancien commentaires', 'skullmasher-io' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Nouveau commentaires', 'skullmasher-io' ) ); ?></div>
			</div>
		</nav>
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Les commentaires sont désactivés.', 'skullmasher-io' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
