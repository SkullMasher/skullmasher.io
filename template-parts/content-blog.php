<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('o-box post-list__item'); ?>>
		<?php the_title( '<h2 class="post-list__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<div class="post-list__meta flex-container">
      <span class="post-list__publish-date"><?php skullmasher_io_post_publish_date(); ?></span>
      <span class="post-list__comments-count">42 commentaires</span>
    </div>
</article>
